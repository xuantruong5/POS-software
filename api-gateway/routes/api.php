<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatewayController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/auth/test', [GatewayController::class, 'test']);

Route::get('/product/categories', [GatewayController::class, 'productCategories']);






