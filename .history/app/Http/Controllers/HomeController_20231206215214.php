<?php
namespace App\Http\Controllers;
use 

class HomeController extends Controller{
    public function index(){
        $data = Blog::getData();
         return view('home',compact('data'));
    }

}
?>