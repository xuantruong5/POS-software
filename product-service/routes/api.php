<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/product-category', [CategoryController::class, 'getCategory']);
Route::post('/product-category-store', [CategoryController::class, 'storeCategory']);