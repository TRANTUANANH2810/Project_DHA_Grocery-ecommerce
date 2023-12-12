<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PostRegisterRequest;
use App\Http\Requests\Frontend\PostRegisterSellerRequest;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function getLogin(){
        return view('frontend.pages.login');
    }

    public function getRegister(){
        return view('frontend.pages.register');
    }

    public function getRegisterSeller(){
        return view('frontend.pages.registerSeller');
    }

    public function logout(){
        Auth::logout();
        return view('frontend.pages.home');
    }

    public function postLogin(Request $request){
        $arr = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
        if(auth()->attempt($arr)){
            if(Auth::user('web')->is_seller == 1 ){
                return view('frontend.pages.dashboard.infor');
            }else{
                return view('frontend.pages.home');
            }
        }else{
            return redirect()->route('home.login')->with('error','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function postRegister(PostRegisterRequest $request){
        User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'user_name' => $request->user_name, 
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home.login')->with('success','Đã đăng ký thành công. Vui lòng đăng nhập tài khoản');
    }

    public function postRegisterSeller(PostRegisterSellerRequest $request){

        $user = [
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'user_name' => $request->user_name, 
            'password' => Hash::make($request->password),
            'is_seller' => 1,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $user_id = User::create($user);
        $user_seller = [
            'user_id' => $user_id->id,
            'shop_name' => $request->shop_name,
            'confirm' => 0,
            'shop_address' => $request->address, 
        ]; 

        Seller::create($user_seller);

        return redirect()->route('home.login')->with('success','Đã đăng ký thành công. Vui lòng đăng nhập tài khoản');
    }
}
