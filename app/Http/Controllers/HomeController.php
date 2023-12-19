<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\product;

class HomeController extends Controller{
    public function index(){
        $ShowProduct = product::all();
        dd($ShowProduct);
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
    public function checkout(){
        return view('checkout');
    }
    public function EditPersonalInfo(){
        return view('edit-personal-info');
    }
    public function resetPassword(){
        return view('reset-password');
    }
    public function payment(){
        return view('payment');
    }
    public function productDetail(){
        return view('product-detail');
    }
}
?>