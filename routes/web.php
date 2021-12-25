<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CategoyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TestController;
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
Route::get('/login', [AuthController::class, 'index'])->name('show-form-login');
Route::post('/login/attempt', [AuthController::class, 'attempt'])->name('login');

Route::get('/register', [AuthController::class, 'create'])->name('show-form-register');
Route::post('/register/store', [AuthController::class, 'store'])->name('register');

Route::get('verify/{id}/{code}', [AuthController::class, 'verify'])->name('verify');

Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
// End Auth

// Test
Route::get('test', [TestController::class, 'index'])->name('test');
// End Test