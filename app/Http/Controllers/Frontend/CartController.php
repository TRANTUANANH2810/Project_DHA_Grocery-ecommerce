<?php

namespace App\Http\Controllers\Frontend;
use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class CartController extends Controller
{
    //
    public function index(Cart $cart) {
        dd($cart->list());
    }
    public function add(Request $request){
        dd($request->list());
    }
}
