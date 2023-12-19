<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class SinglePageController extends Controller
{
    public function getHome(){
        $ShowProducts = product::where('id', '<', '9')->get();
        return view('frontend.pages.home', compact('ShowProducts'));
    }
}
