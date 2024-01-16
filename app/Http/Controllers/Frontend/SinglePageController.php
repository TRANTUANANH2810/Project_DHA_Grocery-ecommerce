<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart as CartModel;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SinglePageController extends Controller
{
    public function getHome(){
        $ShowProducts = product::orderBy('created_at','DESC')->take(20)->get();
        $minPrice  = product::min('price');
        $maxPrice  = product::max('price');
        $selectedMinPrice = product::min('price');
        $selectedMaxPrice   = product::max('price');
        if (Auth::user() != null) {
            $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
            if ($cart != null) {
                $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
            } else {
                $listCartDetail = null;
            }
            return view('frontend.pages.home', compact('ShowProducts','minPrice','maxPrice','selectedMinPrice','selectedMaxPrice','cart','listCartDetail'));
        }
        
        return view('frontend.pages.home', compact('ShowProducts', 'minPrice','maxPrice','selectedMinPrice','selectedMaxPrice'));
    }
    
    public function getDetail($slug){
        $products = product::where('slug',$slug)->first();
        if (Auth::user() != null) {
            $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
            if ($cart != null) {
                $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
            } else {
                $listCartDetail = null;
            }
            return view('frontend.pages.detail', compact('products','cart','listCartDetail'));
        }
        return view('frontend.pages.detail', compact('products'));
    }
    public function searchProduct(Request $request){
        $keywords = explode(' ', $request->name);
        $data = Product::query();
        foreach ($keywords as $keyword) {
            $data->orWhere('name', 'like', '%' . $keyword . '%');
        }
        $product = $data->orWhere('name', 'like', '%' . $request->name . '%')
        ->orderByRaw("CASE WHEN name LIKE '%$request->name%' THEN 1 ELSE 2 END")
        ->get();
        return view('frontend.pages.home', compact('product'));
    }





}
