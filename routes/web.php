<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;

/*
    Route::get('/', function () {
        return view('welcome');
    });
*/
/*
    Route::get('/comprar', function(){
        return view('shop.create_order');
    });
*/

Route::get('/',[ShopController::class, 'index'])->name('product.showcase');
Route::get('/order/create/{product}',[OrderController::class, 'create'])->name('order.create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
