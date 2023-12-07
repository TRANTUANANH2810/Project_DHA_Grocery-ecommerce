<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Blog

class HomeController extends Controller{
    public function index(){
        $data = Blog::getData();
         return view('home',compact('data'));
    }

}
?>