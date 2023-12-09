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
Route::get('/home','App\Http\Controllers\homeController@home')-> name('home.home');
Route::get('/favourite','App\Http\Controllers\homeController@favourite')-> name('home.favourite');
Route::get('/profile','App\Http\Controllers\homeController@profile')-> name('home.profile');
Route::get('/add-new-card','App\Http\Controllers\homeController@addNewcard')-> name('home.addNewcard');
Route::get('/checkout','App\Http\Controllers\homeController@checkout')-> name('home.checkout');
Route::get('/checedit-personal-info','App\Http\Controllers\homeController@EditPersonalInfo')-> name('home.EditPersonalInfo');
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