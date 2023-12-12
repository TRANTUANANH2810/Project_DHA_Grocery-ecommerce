
<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function(){

    Route::get('login',[AccountController::class, 'getLogin'])->name('admin.login');
    
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    Route::resources([
        'category' => CategoriesController::class,
    ]);

})

?>