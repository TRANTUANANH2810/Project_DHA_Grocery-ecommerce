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
use Illuminate\Support\Str;
use App\Models\Seller;

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
        $seller = Seller::where('user_id', Auth::user()->id)->first();
        return view('admin.seller.information.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateSellerRequest $request, string $id)
    {
        $user = User::find($id);

        if(!empty($user->image)){
            File::delete(public_path($user->image));
        }

        if(empty($request->image_default)){
            $image_seller = null;
        }
        else if($request->file('image')){
       
            $image = $request->file('image');
            $seller_image = $image->getClientOriginalName();
            $destinationPath = public_path('/backend/images/sellers/');
            $image->move($destinationPath,$seller_image);

            $image_seller = '/backend/images/sellers/'.$seller_image;
        }
  
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_name' => $request->user_name,
            'image' => $image_seller,
        ]);
        $seller = Seller::where('user_id', $id)->first();
        if ($seller) {
            $seller->update([
                'shop_name' => $request->shop_name,
                'shop_address' => $request->shop_address,
            ]);
        }
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

        $user->update(['password' => Hash::make($request->password), 'confirm' => null ]);

        return redirect()->route('information.edit',Auth::user()->id)->with('success','Đổi mật khẩu thành công'); 
    }

    public function sendMailPassword(Request $request){
        $user = User::find(Auth::user()->id);

        $confirm = Str::random(20);

        $user->update(['confirm' => $confirm]);

        $confirmUrl = route('admin.confirm.password',$confirm);

        sendMailRegister('Xác nhận đổi mật khẩu', 'Vui lòng nhấn vào Link bên dưới', $confirmUrl, $user->email);

        return redirect()->route('information.edit',$user->id)->with('success','Vui lòng kiểm tra email để xác nhận đổi mật khẩu');

    }

    public function confirmEmail($confirm){
        $user = User::where('confirm', $confirm)->first();
        
        if ($user == null) {
            return redirect()->route('admin.seller.home');
        }

        $user->update(['confirm' => 1]);

        return redirect()->route('information.edit',$user->id)->with('success','Đã xác nhận email thành công. Vui lòng nhập mật khẩu');

    }
}
