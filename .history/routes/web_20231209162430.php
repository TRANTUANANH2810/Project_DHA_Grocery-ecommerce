<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\homeController@index')-> name('home.index');
Route::get('/signin','App\Http\Controllers\homeController@signin')-> name('home.signin');
Route::get('/SignUp','App\Http\Controllers\homeController@SignUp')-> name('home.SignUp');
Route::get('/home','App\Http\Controllers\homeController@SignUp')-> name('home.home');

Route::get('/home',function(){
    return view('home');
});
Route::get('/favourite',function(){
    return view('favourite');
});
Route::get('/profile',function(){
    return view('profile');
});
Route::get('/add-new-card',function(){
    return view('add-new-card');
});
Route::get('/checkout',function(){
    return view('checkout');
});
Route::get('/edit-personal-info',function(){
    return view('edit-personal-info');
});
Route::get('/new-password',function(){
    return view('new-password');
});
Route::get('/payment',function(){
    return view('payment');
});
Route::get('/product-detail',function(){
    return view('product-detail');
});
Route::get('/reset-password-emailed',function(){
    return view('reset-password-emailed');
});
Route::get('/reset-password',function(){
    return view('reset-password');
});
Route::get('/shipping',function(){
    return view('shipping');
});