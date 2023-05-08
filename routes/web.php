<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\MenuController;
use \App\Http\Controllers\Admin\ProductController;
use \App\Http\Controllers\Admin\SliderController;

Route::get('admin/user/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/user/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function (){
            Route::get('add',[MenuController::class, 'create']);
            Route::post('add',[MenuController::class, 'store']);
            Route::get('list',[MenuController::class, 'index']);
            Route::get('edit/{menu}',[MenuController::class, 'show']);
            Route::post('edit/{menu}',[MenuController::class, 'update']);
            Route::DELETE('destroy',[MenuController::class, 'destroy']);
        });
        #Product
        Route::prefix('products')->group(function (){
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}',[ProductController::class, 'show']);
            Route::post('edit/{product}',[ProductController::class, 'update']);
            Route::DELETE('destroy',[ProductController::class, 'destroy']);
        });

        #Product
        Route::prefix('sliders')->group(function (){
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}',[SliderController::class, 'show']);
            Route::post('edit/{slider}',[SliderController::class, 'update']);
            Route::DELETE('destroy',[SliderController::class, 'destroy']);
        });

        #upload
        Route::post('upload/service', [\App\Http\Controllers\Admin\UpdateController::class, 'store']);
    });
});


Route::get('/',[\App\Http\Controllers\MainController::class, 'index']);
Route::post('/services/load-product', [\App\Http\Controllers\MainController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html', [\App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [\App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [\App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [\App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [\App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [\App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [\App\Http\Controllers\CartController::class, 'addCart']);

