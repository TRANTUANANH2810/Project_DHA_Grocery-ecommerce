<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function getHome(){
        return view('frontend.pages.home');
    }
}
