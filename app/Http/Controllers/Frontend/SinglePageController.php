<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

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
