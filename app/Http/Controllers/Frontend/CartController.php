<?php

namespace App\Http\Controllers\Frontend;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart as CartModel;
use App\Models\CartDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
    public function AddCart(Request $req, $id)
    {
        $product = product::where('id', $id)->first();
        if ($product != null) {
            if (Auth::user() != null) {
                $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
                $updateData = [
                    'user_id' => Auth::user()->id,
                    'total_price' => isset($cart->total_price) ? $product->price + $cart->total_price : $product->price,
                    'qty' => isset($cart->qty) ? 1 + $cart->qty : 1,
                    'is_active' => 1
                ];
                $cart->update($updateData);

                $currentCartDetail = CartDetail::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
                if ($currentCartDetail != null) {
                    $updateDataDetail = [
                        'cart_id' => $cart->id,
                        'product_id' => $product->id,
                        'price' => isset($currentCartDetail->price) ? $product->price + $currentCartDetail->price : $currentCartDetail->price,
                        'qty' => isset($currentCartDetail->qty) ? 1 + $currentCartDetail->qty : $currentCartDetail->qty
                    ];
                    $currentCartDetail->update($updateDataDetail);
                } else {
                    $addDataDetail = [
                        'cart_id' => $cart->id,
                        'product_id' => $product->id,
                        'price' => $product->price,
                        'qty' => 1
                    ];
                    $cartDetail = CartDetail::create($addDataDetail);
                }
                
                $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
                return view('frontend.pages.cart', compact('cart','listCartDetail'));
            } else {
                $oldcart = Session('Cart') ? Session('Cart') : null;
                $newCart = new Cart($oldcart);
                $newCart->AddCart($product, $id);

                $req->session()->put('Cart', $newCart);
            }
        } 
        return view('frontend.pages.cart');
    }


    public function DeleteItemCart($id)
    {
        $product = Product::find($id);
        $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
        $cartDetail = CartDetail::where('cart_id', $cart->id)->where('product_id', $id)->first();
        if ($cartDetail != null) {
            $cartDetail->delete();
        }
        $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
        $this->countQtyCart($listCartDetail);
        return true;
    }

    public function ViewListCart()
    {
        if (Auth::user() != null) {
            $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
            if ($cart != null) {
                $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
            } else {
                $listCartDetail = null;
            }
            return view('frontend.pages.checkout',compact('cart','listCartDetail'));
        } else {
            return view('frontend.pages.login');
        }
        
    }

    // public function convertCartToOrder($cart)
    // {
    //     $product = Product::where()
    //     $data = [
    //         'cart_id' => $cart->id,
    //         'user_id' => Auth::user()->id,
    //         'seller_id' => 
    //         'total_price' => isset($data['body']) ? $data['body']->totalPrice : 0,
    //         'qty' => isset($data['body']) ? $data['body']->totalQuanty : 0,
    //         'is_active' => 1
    //     ]
    //     $order = Order::create()
    // }

    public function ContinueToCheckout(Request $request)
    {
        $data = $request->all();
        $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
        if ($cart != null) {
        } else {
            $totalPrice = isset($data['body']) ? $this->countTotalPrice($data['body']) : 0;
            $qty = isset($data['body']) ? count($data['body']) : 0;

            $addData = [
                'user_id' => Auth::user()->id,
                'total_price' => isset($data['body']) ? $data['body']->totalPrice : 0,
                'qty' => isset($data['body']) ? $data['body']->totalQuanty : 0,
                'is_active' => 1
            ];

            $addCart = CartModel::create($addData);

            if (isset($data['body']) && $addCart != null) {
                foreach ($data['body']->products as $item) {
                    $addDataDetail = [
                        'cart_id' => $addCart->id,
                        'product_id' => $item['productInfo']->id,
                        'price' => $item['price'],
                        'qty' => $item['quanty']
                    ];
                    CartDetail::create($addDataDetail);
                }
            }
        }
    }


    public function DeleteListItemCart($id)
    {
        $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
        $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
        foreach ($listCartDetail as $key => $value) {
            $value->delete();
        }
        
        $this->countQtyCart($listCartDetail);
        return true;
    }


    public function SaveListItemCart($id, $quanty)
    {
        $product = Product::find($id);
        $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
        $cartDetail = CartDetail::where('cart_id', $cart->id)->where('product_id', $id)->first();
        if ($cartDetail != null) {
            $dataUpdate = [
                'qty' => $quanty,
                'price' => $product->price * $quanty
            ];
            $cartDetail->update($dataUpdate);
        }
        $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
        $this->countQtyCart($listCartDetail);
        return true;
    }

    public function countQtyCart($listCartItem) {
        $indexQty = 0;
        $indexPrice = 0;
        foreach ($listCartItem as $item) {
            $indexQty += $item->qty;
            $indexPrice += $item->price;
        }
        $cart = CartModel::find($listCartItem[0]->cart_id);
        $dataUpdate = [
            'qty' => $indexQty,
            'total_price' => $indexPrice
        ];
        $cart->update($dataUpdate);
    }
}
