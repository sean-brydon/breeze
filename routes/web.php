<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Get Requests
Route::get('/', function () {
    return view('welcome');
})->name('home');
//Products
Route::get('products',[ProductController::class,'index'])->name('products'); 
Route::get('product/{id}',[ProductController::class,'moreInfo'])->name('moreInfo'); 

// All Cart Actions
Route::get('cart',[ProductController::class,'cart'])->name('cart'); 
Route::get('cart/addToCart/{id}',[ProductController::class,'addToCart']); 
Route::get('cart/removeProduct/{id}',[ProductController::class,'removeCart'])->name('removeItemFromCart');
Route::get('cart/addOne/{id}',[ProductController::class,'addOne']);
Route::get('cart/removeOne/{id}',[ProductController::class,'removeOne']);

// Order Routes
// POST Order 
// This middleware route ensures the use is logged in and has a valid token. The token is updated when the user logs in to ensure this is always correct.
Route::post('order/place',[OrderController::class,'placeOrder'])->middleware(['auth']);

require __DIR__.'/auth.php';
