<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', [ProductController::class,'index']);
Route::post('/product', [ProductController::class,'store']);
Route::put('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);

Route::get('/orders', [OrderController::class,'index']);
Route::post('/order', [OrderController::class,'store']);