<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/product-category', [CategoryController::class, 'getCategory']);
Route::post('/product-category-store', [CategoryController::class, 'storeCategory']);

Route::get('/products', [ProductController::class, 'getProduct']);

Route::post('/store-products', [ProductController::class, 'store']);

Route::post('/store-products', [ProductController::class, 'store']);

Route::post('/store-brand', [BrandController::class, 'storeBrand']);

Route::post('/store-combo', [ProductController::class, 'storeComBo']);