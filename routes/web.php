<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

/*
    Route::get('/', function () {
        return view('welcome');
    });
*/

    Route::get('/check', function(){
        return view('shop.checkout');
    });


Route::get('/',[ShopController::class, 'index'])->name('product.showcase');
Route::get('/order',[OrderController::class, 'index'])->name('order.index');
Route::get('/order/create/{product}',[OrderController::class, 'create'])->name('order.create');
Route::post('/order/store',[OrderController::class, 'store'])->name('order.store');
Route::get('/order/checkout/{order}',[OrderController::class, 'checkout'])->name('order.checkout');
Route::post('/payment/make',[PaymentController::class,'createPayment']);
Route::get('/ruta/ejemplo/{id}',[PaymentController::class,'getRoute']);
//Route::get('/payment/{order}',[PaymentController::class,'createPayment']); //viene redirigido al crear la orden


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
