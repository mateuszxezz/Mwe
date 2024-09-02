<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/products', [ProductController::class, 'index']);
Route::resource('products', ProductController::class);
Route::get('/cadastrar', [ProductController::class, 'create']);
Route::post('/cadastrar', [ProductController::class, 'store']);
Route::get('/', [HomeController::class, 'index']);