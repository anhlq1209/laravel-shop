<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\LikesController;
use Illuminate\Support\Facades\Route;


// Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/product', [ProductController::class, 'index'])->name('contact');
// End Page



// User
Route::get('/likes', [LikesController::class, 'index'])->name('likes');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('cart');
// End User


// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/attempt', [AuthController::class, 'attempt']);
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register/store', [AuthController::class, 'store']);

Route::get('/logout', [AuthController::class, 'destroy']);
// End Auth




// ADMIN

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');