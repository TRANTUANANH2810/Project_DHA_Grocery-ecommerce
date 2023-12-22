<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class SinglePageController extends Controller
{
    public function getHome(){
        $ShowProducts = product::orderBy('created_at','DESC')->take(20)->get();
        return view('frontend.pages.home', compact('ShowProducts'));
    }
    public function getDetail($slug){
        $products = product::where('slug',$slug)->first();
        return view('frontend.pages.detail', compact('products'));
    }
}
