<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PostRegisterSellerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function getDashboard(){
        $user = Auth::user();
        return view('frontend.pages.dashboard.dashboard_user', compact('user'));
    }

    public function getProfile(){
        $user = Auth::user();
        return view('frontend.pages.dashboard.profile', compact('user'));
    }

    public function postProfile(Request $request){
        $user_id = Auth::user()->id;
        if($request->phone && $request->email){
            $request->validate([
                'email' => 'bail|email|unique:user,email,'.$user_id,
                'phone' => 'bail|numeric|unique:user,phone,'.$user_id,
            ]);  
        }
    
        if($request->email){
            $request->validate([
                'email' => 'bail|email|unique:user,email,'.$user_id,
            ]); 
        }

        $user = User::find($user_id);
        $user->update($request->all());

        return redirect()->route('home.profile')->with('success','Cập nhật thành công');
    }

    public function postChangePassword(Request $request){
        $user = User::find(Auth::user()->id);

        $request->validate([
            'password' => 'min:8',
            'repassword' => 'bail|same:password',
        ]); 

        $user->update(['password' => Hash::make($request->password), 'confirm' => null]);

        return redirect()->route('home.profile')->with('success','Đổi mật khẩu thành công');

    }

    public function sendMailPassword(){
        $user = User::find(Auth::user()->id);

        $confirm = Str::random(20);

        $user->update(['confirm' => $confirm]);

        $confirmUrl = route('home.confirm.password',$confirm);

        sendMailRegister('Xác nhận đổi mật khẩu', 'Vui lòng nhấn vào Link bên dưới', $confirmUrl, $user->email);

        return redirect()->route('home.profile')->with('success','Vui lòng kiểm tra email để xác nhận đổi mật khẩu');

    }

    public function confirmEmail($confirm){
        $user = User::where('confirm', $confirm)->first();
        
        if ($user == null) {
            return redirect()->route('home.index');
        }

        $user->update(['confirm' => 1]);

        return redirect()->route('home.profile')->with('success','Đã xác nhận email thành công. Vui lòng nhập mật khẩu');

    }
}
