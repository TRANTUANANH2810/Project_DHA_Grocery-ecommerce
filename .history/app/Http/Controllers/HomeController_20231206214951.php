<?php
namespace App\Http\Controllers;

class HomeController extends Controller{
    public function index(){
        $data = Blog::getData();
         return view('home',compact('data'));
    }

}
?>