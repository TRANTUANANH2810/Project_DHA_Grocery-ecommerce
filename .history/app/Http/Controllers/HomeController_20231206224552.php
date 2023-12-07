<?php
namespace App\Http\Controllers;
use App\Models\Blog;

class HomeController extends Controller{
    public function index(){
        $data = Blog::getData();
         return view('welcome');
    }

}
?>