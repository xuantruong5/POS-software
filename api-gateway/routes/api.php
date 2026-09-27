<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatewayController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/auth/test', [GatewayController::class, 'test']);
Route::post('/auth/login', [GatewayController::class, 'login']);

Route::get('/product/categories', [GatewayController::class, 'productCategories']);

Route::get('/products', [GatewayController::class, 'products']);






