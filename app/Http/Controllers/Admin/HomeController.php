<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = User::where('is_seller',0)->orderBY('id','desc')->get();

        $user_active = User::where('is_active',1)->where('is_seller',0)->get();

        $seller = User::where('is_seller',1)->orderBY('id','desc')->get();

        $seller_active = User::where('is_active',1)->where('is_seller',1)->get();
        
        return view('admin.manage.home',compact('user','user_active','seller','seller_active'));
    }
}
