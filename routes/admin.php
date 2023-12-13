
<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SellerController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function(){

    Route::get('login',[AccountController::class, 'getLogin'])->name('admin.login');

    Route::post('login',[AccountController::class, 'postLogin'])->name('admin.login.post');

    Route::group(['middleware' => 'checkAdmin'], function(){

        Route::get('logout',[AccountController::class, 'logout'])->name('admin.logout');
    
        Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
        Route::resources([
            'category' => CategoriesController::class,
            'seller' => SellerController::class,
        ]);
        
    });
})

?>