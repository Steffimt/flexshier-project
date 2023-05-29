<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;

// use App\Http\Controllers\HistoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/p', [ProductsController::class, 'index']);

Auth::routes();




Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index']);

Route::get('/cartview', [App\Http\Controllers\CartController::class, 'index']);

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('/checkout', [ProductController::class, 'checkout'])->name('checkout');

Route::post('/success', [ProductController::class, 'success'])->name('checkout.success');

Route::post('/cancel', [ProductController::class, 'cancel'])->name('checkout.cancel');

// Route::get('/history', [App\Http\Controllers\Controller::class, 'index']);

Route::get('/scanner', [App\Http\Controllers\Scanner::class, 'index']);

Route::get('/product', [App\Http\Controllers\product::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/shoppingcart', [App\Http\Controllers\ShoppingCartController::class, 'index']);


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/cart', [CartsController::class, 'store']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart', [HomeController::class, 'showcart']);

// Route::get('/cart', [CartsController::class, 'index'])->name('cart.index');
// Route::delete('/cart/{id}', [CartsController::class, 'remove'])->name('cart.remove');
// Route::get('/cart/checkout', [CartsController::class, 'checkout'])->name('cart.checkout');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index']);