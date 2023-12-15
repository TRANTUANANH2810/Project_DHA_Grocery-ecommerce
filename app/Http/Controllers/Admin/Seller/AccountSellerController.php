<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostUpdateSellerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AccountSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

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
        $seller = User::find(Auth::user()->id);
        return view('admin.seller.information.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateSellerRequest $request, string $id)
    {
        $seller = User::find($id);

        if(empty($request->image_default)){
            if($seller->image){
                $get_image = $seller->image;
                File::delete(public_path($get_image));
            }
            $data_image = null;
            
        }
        else if($request->file('image')){
            if($seller->image){
                $get_image = $seller->image;
                File::delete(public_path($get_image));
            }
            $image = $request->file('image');
            $customer_image = $image->getClientOriginalName();
            $destinationPath = public_path('/ckfinder/uploads/images/seller/');
            $image->move($destinationPath,$customer_image);

            $data_image = '/ckfinder/uploads/images/seller/'.$customer_image;
        }
        else{
            $data_image = $seller->image;
        }
  
        $seller->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_name' => $request->user_name,
            'image' => $data_image,
        ]);
        $seller->seller->update([
            'shop_name' => $request->shop_name,
            'shop_address' => $request->shop_address,
        ]);
        return redirect()->route('information.edit',$id)->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function postSellerPassword(Request $request){
        $user = User::find(Auth::user()->id);

        $request->validate([
            'password' => 'min:8',
            'repassword' => 'bail|same:password',
        ]); 

        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->route('information.edit',Auth::user()->id)->with('success','Đổi mật khẩu thành công'); 
    }
}
