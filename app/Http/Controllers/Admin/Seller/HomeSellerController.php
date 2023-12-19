<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSellerController extends Controller
{
    public function index(){
        return view('admin.seller.home');
    }
}