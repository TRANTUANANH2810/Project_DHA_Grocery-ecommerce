<?php
namespace App\Http\Controllers;
use App\Models\Blog;

class HomeController extends Controller{
    public function index(){
         return view('welcome');
    }
    public function signin(){
        return view('SignIn');
   }
   public function signup(){
    return view('SignUp');
}
}
?>