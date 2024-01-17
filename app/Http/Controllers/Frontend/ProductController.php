<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart as CartModel;
use App\Models\CartDetail;

class ProductController extends Controller
{

    public function filterByPrice(Request $request)
    {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $selectedMinPrice =  $request->input('min_price');
        $selectedMaxPrice   = $request->input('max_price');
    
        $ShowProducts = product::when($minPrice, function ($query) use ($minPrice) {
            return $query->where('price', '>=', $minPrice);
        })
        ->when($maxPrice, function ($query) use ($maxPrice) {
            return $query->where('price', '<=', $maxPrice);
        })
        ->get();
        if (Auth::user() != null) {
            $cart = CartModel::where('user_id', Auth::user()->id)->where('is_active', 1)->first();
            if ($cart != null) {
                $listCartDetail = CartDetail::where('cart_id', $cart->id)->get();
            } else {
                $listCartDetail = null;
            }
        } else {
            $cart = null;
            $listCartDetail = null;
        }

        return view('frontend.pages.home', compact('ShowProducts','minPrice','maxPrice','selectedMinPrice','selectedMaxPrice','cart','listCartDetail'));
}

}
