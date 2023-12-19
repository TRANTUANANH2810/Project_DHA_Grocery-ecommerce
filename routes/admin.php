
<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Seller\AccountSellerController;
use App\Http\Controllers\Admin\Seller\HomeSellerController;
use App\Http\Controllers\Admin\Seller\OrderController;
use App\Http\Controllers\Admin\Seller\ProductSellerController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function(){

    Route::get('login',[AccountController::class, 'getLogin'])->name('admin.login');

    Route::post('login',[AccountController::class, 'postLogin'])->name('admin.login.post');


    Route::group(['middleware' => ['checkAdmin','checkSeller']], function(){
    
        Route::get('logout',[AccountController::class, 'logout'])->name('admin.logout');

    });

    Route::group(['middleware' => 'checkAdmin'], function(){
    
        Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
        Route::resources([
            'category' => CategoriesController::class,
            'seller' => SellerController::class,
            'user' => UserController::class,
        ]);

        Route::post('seller-change-password/{id}', [SellerController::class, 'postSellerPassword'])->name('admin.seller.password');
        Route::post('user-change-password/{id}', [UserController::class, 'postUserPassword'])->name('admin.user.password');

    });

    Route::group(['middleware' => ['checkSeller','checkActive']], function(){

        Route::get('/seller-home', [HomeSellerController::class, 'index'])->name('admin.seller.home');

        Route::resources([
            'information' => AccountSellerController::class,
            'products' => ProductSellerController::class,
            'orders' => OrderController::class,
        ]);

        Route::post('seller-infor-change-password', [AccountSellerController::class, 'postSellerPassword'])->name('admin.infor.password');

    });
})

?>