<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostUpdateSellerRequest;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller = User::where('is_seller',1)->with('seller')->get();
        return view('admin.seller.list',compact('seller'));
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
        $seller = User::where('id',$id)->with('seller')->first();
        return view('admin.seller.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateSellerRequest $request, $id)
    {
        $seller = User::find($id); 
        $seller->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_name' => $request->user_name,
        ]);
        $seller->seller->update([
            'shop_name' => $request->shop_name,
            'shop_address' => $request->shop_address,
        ]);
        return redirect()->route('seller.edit',$id)->with('success', 'Cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->update([
            'is_active' => $user->is_active == 1 ? 0 : 1
        ]);
        return redirect()->route('seller.index')->with('success', 'Đổi trạng thái thành công');
    }
}
