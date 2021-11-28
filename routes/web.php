<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\shoppingcartController;
use App\Http\Controllers\shopdetailsController;
use App\Http\Controllers\checkoutController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products',[productsController::class,'products'])->name('products');
Route::get('/shoppingcart',[shoppingcartController::Class,'shoppingcart'])->name('shoppingcart');
Route::get('/shopdetails',[shopdetailsController::Class,'shopdetails'])->name('shopdetails');
Route::get('/checkout',[checkoutController::Class,'checkout'])->name('checkout');
Route::get('/contact',[ContactController::Class,'contact'])->name('contact');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/attempt', [AuthController::class, 'attempt']);
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register/store', [AuthController::class, 'store']);

Route::get('/logout', [AuthController::class, 'destroy']);
// End Auth
// ADMIN

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');