<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;


Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/customers', [CustomerController::class, 'customer']);
Route::get('/products', [ProductController::class, 'product']);
Route::get('/customers/new',[CustomerController::class,'create']);
Route::post('/customers/add',[CustomerController::class,'store']);
Route::get('/customers/edit/{id}',[CustomerController::class,'edit']);
Route::post('/customers/update/{id}',[CustomerController::class,'update']);
Route::post('/products/add',[ProductController::class,'store']);
Route::get('/products/edit/{id}',[ProductController::class,'edit']);
Route::post('/products/update/{id}',[ProductController::class,'update']);
Route::get('/products/new',[ProductController::class,'create']);
Route::get('/products/delete/{id}',[ProductController::class,'delete']);
Route::get('/customers/delete/{id}',[CustomerController::class,'delete']);

