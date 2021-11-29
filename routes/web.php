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




// Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/categories', [CategoyController::class, 'index'])->name('admin.category');
    Route::prefix('category')->group(function () {
        Route::get('/create', [CategoyController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoyController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoyController::class, 'edit'])->name('admin.category.edit');
        Route::post('/update/{id}', [CategoyController::class, 'edit'])->name('admin.category.update');
        Route::post('/delete/{id}', [CategoyController::class, 'destry'])->name('admin.category.delete');
    });

    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.product');
    Route::prefix('product')->group(function () {
        Route::get('/create', [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [AdminProductController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/update/{id}', [AdminProductController::class, 'edit'])->name('admin.product.update');
        Route::post('/delete/{id}', [AdminProductController::class, 'destry'])->name('admin.product.delete');
    });

    Route::get('/bills', [BillController::class, 'index'])->name('admin.bill');
    Route::get('/messages', [MessageController::class, 'index'])->name('admin.message');
    Route::get('/logout', [AdminAuthController::class, 'destroy'])->name('admin.logout');
});
// End Admin