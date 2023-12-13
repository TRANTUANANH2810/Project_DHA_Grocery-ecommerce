<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getDashboard(){
        if(Auth::check()){
            return view('frontend.pages.dashboard.infor');
        }else{
            return redirect()->route('home.login');
        }
    }
}
