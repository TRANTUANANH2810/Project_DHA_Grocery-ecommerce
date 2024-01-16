<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

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

    return view('frontend.pages.home', compact('ShowProducts','minPrice','maxPrice','selectedMinPrice','selectedMaxPrice' ));
}

}
