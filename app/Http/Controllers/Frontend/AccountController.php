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
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
            return view('frontend.pages.login');
        }else{
            return redirect()->route('home.index');
        }
    }

    public function getRegister(){
        if(!Auth::check()){
            return view('frontend.pages.register');
        }else{
            return redirect()->route('home.index');
        }
    }

    public function getRegisterSeller(){
        if(!Auth::check()){
            return view('frontend.pages.registerSeller');
        }else{
            return redirect()->route('home.index');
        }
    }

    public function logout(){
        Auth::logout();
        return view('frontend.pages.home');
    }

    public function postLogin(Request $request){
        $user = User::where('user_name',$request->user_name)->first();
        if(!empty($user)){
            if(Hash::check($request->password, $user->password)){
                if($user->is_active == 1){
                    if ($user->confirm == null) {
                        Auth::login($user);
                        if($user->is_seller == 1){
                            return redirect()->route('admin.seller.home')->with('success','Đăng nhập thành công');
                        }else{
                            return redirect()->route('home.index')->with('success','Đăng nhập thành công');
                        }
                    } else {
                        return redirect()->route('home.login')->with('warning','Tài khoản chưa xác thực');
                    }                    
                }else{
                    return redirect()->route('home.login')->with('warning','Tài khoản đã bị khóa');
                }
            }
        }
        return redirect()->route('home.login')->with('error','Tài khoản hoặc mật khẩu không chính xác');
        // $arr = [
        //     'user_name' => $request->user_name,
        //     'password' => $request->password,
        // ];
        // if(auth()->attempt($arr)){
        //     return redirect()->route('admin.home')->with('success','Đăng nhập thành công');
        // }else{
        //     return redirect()->route('home.login')->with('error','Tài khoản hoặc mật khẩu không chính xác');
        // }
    }

    public function postRegister(PostRegisterRequest $request){
        $user = User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'email' => $request->email,
            'user_name' => $request->user_name, 
            'password' => Hash::make($request->password),
            'confirm' => Str::random(20),
        ]);

        $confirmUrl = route('home.confirm.email',$user->confirm);

        sendMailRegister('Xác nhận đăng ký tài khoản', 'Vui lòng nhấn vào Link bên dưới', $confirmUrl, $user->email);
        
        return redirect()->route('home.login')->with('success','Đã đăng ký thành công. Vui lòng đăng nhập tài khoản');
    }

    public function postRegisterSeller(PostRegisterSellerRequest $request){

        $user = User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'user_name' => $request->user_name, 
            'password' => Hash::make($request->password),
            'is_seller' => 1,
            'email' => $request->email,
            'phone' => $request->phone,
            'confirm' => Str::random(20),
        ]);
        
        $confirmUrl = route('home.confirm.email',$user->confirm);

        sendMailRegister('Xác nhận đăng ký tài khoản', 'Vui lòng nhấn vào Link bên dưới', $confirmUrl, $user->email);
        
        $user_seller = [
            'user_id' => $user->id,
            'shop_name' => $request->shop_name,
            'shop_address' => $request->address, 
        ]; 

        Seller::create($user_seller);

        return redirect()->route('home.login')->with('success','Đã đăng ký thành công. Vui lòng kiểm tra email để xác nhận');
    }

    /**
     * confirm email for user
     */
    public function confirmEmail(Request $request, $confirm){
        $user = User::where('confirm', $confirm)->first();
        if ($user == null) {
            return redirect()->route('home.login')->with('success','Thất bại');
        }
        $data['confirm'] = null;
        $user->update($data);
        return redirect()->route('home.login')->with('success','Đã xác nhận email thành công. Vui lòng đăng nhập tài khoản');
    }
}
