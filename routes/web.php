<?php

use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\SinglePageController;
use App\Http\Controllers\Frontend\CartController;
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

Route::get('/signin','App\Http\Controllers\homeController@signin')-> name('home.signin');
Route::get('/SignUp','App\Http\Controllers\homeController@SignUp')-> name('home.SignUp');
Route::get('/home','App\Http\Controllers\homeController@home')-> name('home.home');
Route::get('/favourite','App\Http\Controllers\homeController@favourite')-> name('home.favourite');
Route::get('/profile','App\Http\Controllers\homeController@profile')-> name('home.profile');
Route::get('/add-new-card','App\Http\Controllers\homeController@addNewcard')-> name('home.addNewcard');
Route::get('/checkout','App\Http\Controllers\homeController@checkout')-> name('home.checkout');
Route::get('/edit-personal-info','App\Http\Controllers\homeController@EditPersonalInfo')-> name('home.EditPersonalInfo');
Route::get('/forget-password','App\Http\Controllers\homeController@resetPassword')-> name('home.resetPassword');
Route::get('/payment','App\Http\Controllers\homeController@payment')-> name('home.payment');
// Route::get('/detail/{slug}','App\Http\Controllers\homeController@detail')-> name('home.detail');

// Route::get('/reset-password-emailed',function(){
//     return view('reset-password-emailed');
// });
// Route::get('/reset-password',function(){
//     return view('reset-password');
// });
// Route::get('/shipping',function(){
//     return view('shipping');
// });
Route::group(['namespace' => 'Frontend','middleware' => 'checkActive'], function(){

    Route::get('/', [SinglePageController::class, 'getHome'])->name('home.index');

    Route::get('/detail/{slug}',[SinglePageController::class, 'getDetail'])-> name('detail');

    Route::get('/cart',[CartController::class, 'index'])-> name('cart.index');
    Route::post('/cart_add',[CartController::class, 'add'])-> name('cart.add');

    Route::get('login', [AccountController::class, 'getLogin'])->name('home.login');

    Route::post('login', [AccountController::class, 'postLogin'])->name('home.login.post');

    Route::get('logout', [AccountController::class, 'logout'])->name('home.logout');

    Route::get('register', [AccountController::class, 'getRegister'])->name('home.register');

    Route::post('register', [AccountController::class, 'postRegister'])->name('home.register.post');


    // Seller
    Route::get('registerSeller', [AccountController::class, 'getRegisterSeller'])->name('home.registerSeller');

    Route::post('registerSeller', [AccountController::class, 'postRegisterSeller'])->name('home.registerSeller.post');

    Route::get('registerSeller/confirmEmail/{confirm}', [AccountController::class, 'confirmEmail'])->name('home.confirmEmail');
   
    Route::get('sellers/create', [AccountController::class, 'getSellerCreate'])->name('home.sellers.create');

    Route::post('sellers/create', [AccountController::class, 'postSellerCreate'])->name('home.sellers.create.post');


    Route::group(['middleware' => 'checkFrontend'], function(){

        // Dashboard
        Route::get('dashboard', [DashboardController::class,'getDashboard'])->name('home.dashboard');

        Route::get('profile', [DashboardController::class,'getProfile'])->name('home.profile');

        Route::post('profile', [DashboardController::class,'postProfile'])->name('home.profile.post');

        Route::post('change-password', [DashboardController::class,'postChangePassword'])->name('home.profile.password.post');


    });
});