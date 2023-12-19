<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::where('seller_id',Auth::user()->id)->with('user')->get();
        return view('admin.seller.order.list',compact('order'));
    }

    public function getOrderEditDelivery(Request $request){
        $order = Order::find($request->id);
        $htmlResult = View::make('admin.manage.layouts.ajax_get_order_delivery', compact('order'))->render();
        return response()->json([
            'success' => true,
            'html' => $htmlResult,
        ]);
    }

    public function postOrderEditDelivery(Request $request){
        $order = Order::find($request->order_id);
        $order->update(['status' => $request->status]);
        return redirect()->route('orders.index')->with('success', 'Cập nhật trạng thái thành công');

    }

    public function getOrderDetail(Request $request){
        $order = Order::where('id',$request->id)->with('user')->with('orderDetail')->first();
        $htmlResult = View::make('admin.manage.layouts.ajax_get_orderDetail', compact('order'))->render();
        return response()->json([
            'success' => true,
            'html' => $htmlResult,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        OrderDetail::where('orders_id',$order->id)->delete();
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Xóa đơn hàng thành công');
    }
}
