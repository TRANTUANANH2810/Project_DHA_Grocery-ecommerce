<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function getLogin(){
        return view('admin.auth.login');
    }

        public function postLogin(Request $request){
        $admin = Admin::where('user_name',$request->user_name)->first();
        if(!empty($admin)){
            if(Hash::check($request->password, $admin->password)){
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.home');
            }
        }
        return redirect()->route('admin.login')->with('error','Tài khoản hoặc mật khẩu không chính xác');
    }

    public function logout(){
        Auth::guard('admin')->logout(); 
        return redirect()->route('admin.login');
    }
}
