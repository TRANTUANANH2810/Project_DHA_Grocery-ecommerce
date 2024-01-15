<?php

namespace App\Http\Controllers\Frontend;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart as CartModel;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;

class CheckotController extends Controller
{
    public function ContinueToCheckout(Request $req)
    {
        $data = $req->validate([
            'userName' => 'required',
            'userPhone' => 'required',
            'userAddress' => 'required',
        ]);

        $userName = $data['userName'];
        $userPhone = $data['userPhone'];
        $userAddress = $data['userAddress'];

        $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
        $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();

        $arr = $this->productClassification($listCartDetail);
        $arrOrderId = $this->createOrder($arr, $cart, $userName, $userPhone, $userAddress);
        $result = $this->vnPay($arrOrderId, $cart, $userName, $userPhone, $userAddress);
        return $result;
    }

    public function ResultCheckout(Request $req)
    {
        $result = $req->input('vnp_TransactionStatus');
        $orderIdString = $req->input('vnp_OrderInfo');
        $arrOrderId = explode(' and ', $orderIdString);
        $msg = 'unknown';
        if ($result === '00') {
            foreach ($arrOrderId as $key => $value) {
                $order = Order::find($value);
                $dataUpdate = ['is_payment' => 1];
                $order->update($dataUpdate);
            }
            $msg = 'Thanh toán thành công';
        } elseif ($result === '01') {
            $msg = 'Thanh toán thất bại';
        } elseif ($result === '02') {
            $msg = 'Thanh toán lỗi';
        }
        return redirect()->route('home.index')->with('success', $msg);
    }

    public function productClassification($listCartDetail)
    {
        $arr = [];

        foreach ($listCartDetail as $key => $value) {
            $productInfo = [
                'cartDetailId' => $value->id,
                'product_id' => $value->product_id,
                'price' => $value->price,
                'qty' => $value->qty
            ];

            $sellerId = $value->product->seller_id;

            if (array_key_exists($sellerId, $arr)) {
                array_push($arr[$sellerId]['cart'], $productInfo);
                $arr[$sellerId]['total_price'] += $value->price;
                $arr[$sellerId]['total_qty'] += $value->qty;
            } else {
                $arr[$sellerId] = [
                    'cart' => [$productInfo],
                    'total_price' => $value->price,
                    'total_qty' => $value->qty
                ];
            }
        }
        return $arr;
    }

    public function createOrder($arr, $cart, $userName, $userPhone, $userAddress)
    {
        $arrOrderId = [];
        foreach ($arr as $key => $value) {
            $orderData = [
                'cart_id' => $cart->id,
                'user_id' => Auth::user()->id,
                'seller_id' => $key,
                'status' => 1,
                'total_price' => $value['total_price'],
                'qty' => $value['total_qty'],
                'address' => $userName . '<br>' . $userPhone . '<br>' . $userAddress,
            ];
            $order = Order::create($orderData);
            $arrOrderId[] = $order->id;

            foreach ($value['cart'] as $k => $item) {
                $dataOrderDetail = [
                    'orders_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'price' => $item['price'],
                    'qty' => $item['qty'],
                ];
                OrderDetail::create($dataOrderDetail);
            }
        }

        $dataUpdateCart = [
            'is_active' => 0,
        ];
        $cart->update($dataUpdateCart);
        $addData = [
            'user_id' => Auth::user()->id,
            'is_active' => 1
        ];
        CartModel::create($addData);
        return $arrOrderId;
    }

    public function vnPay($arrOrderId, $cart, $userName, $userPhone, $userAddress)
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('cart.ResultToCheckout');
        $vnp_TmnCode = "E2B9MB79";
        $vnp_HashSecret = "PVSCAJXMRRSXOWXSMWUHJMWNBEKFKHLA";

        $vnp_TxnRef = implode('', $arrOrderId);;
        $vnp_OrderInfo = implode(' and ', $arrOrderId);
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $cart->total_price * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = '';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        }
        return $vnp_Url;
    }
}
