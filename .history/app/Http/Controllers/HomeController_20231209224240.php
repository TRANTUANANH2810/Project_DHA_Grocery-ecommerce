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
    public function SignUp(){
        return view('SignUp');
    }
    public function home(){
        return view('home');
   }
    public function favourite(){
        return view('favourite');
    }
    public function profile(){
        return view('profile');
   }
    public function addNewcard(){
        return view('add-new-card');
    }
    public function addNewcard(){
        return view('add-new-card');
    }
   
}
?>