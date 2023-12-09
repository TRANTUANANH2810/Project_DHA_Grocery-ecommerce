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

Route::get('/','App\Http\Controllers\homeController@index');
Route::get('/sign-in', function () {
    return view('SignIn');
});
Route::get('/sign-up', function () {
    return view('SignUp');
});
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