<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class, 'showLogin'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::get('/store', [ProductController::class, 'createProduct'])->name('products.form');
Route::get('/products', [ProductController::class, 'showProducts'])->name('products.list');

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});



