<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;


Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/customers', [CustomerController::class, 'customer']);
Route::get('/products', [ProductController::class, 'product']);
