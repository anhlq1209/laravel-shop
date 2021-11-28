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


// Page
Route::get('/', [HomeController::class, 'index'])->name('home');
// End Page


// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/attempt', [AuthController::class, 'attempt']);
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register/store', [AuthController::class, 'store']);

Route::get('/logout', [AuthController::class, 'destroy']);
// End Auth




// ADMIN

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');