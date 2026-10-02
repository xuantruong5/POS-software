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

Route::post('store/products', [GatewayController::class, 'storeProduct']);

Route::post('/store/location', [GatewayController::class, 'storeLocation']); // vị trí để hàng 

Route::post('/store-brand', [GatewayController::class, 'storeBrand']); // tạo mới thương hiệu 

Route::post('/store-combo', [GatewayController::class, 'storeCombo']);


Route::get('/supplier', [GatewayController::class, 'getSupplier']);
Route::post('/store/supplier', [GatewayController::class, 'storeSupplier']);
Route::put('/update/supplier/{id}', [GatewayController::class, 'updateSupplier']);
// Xóa tạm - Soft Delete
Route::delete('/delete/supplier/{id}', [GatewayController::class, 'deleteSupplier']);
// Khôi phục
Route::put('/suppliers/{id}/restore', [GatewayController::class, 'restoreSupplier']);
Route::post('/supplier/status/{id}', [GatewayController::class, 'changeStatusSupplier']);


// lấy các tỉnh, thành phố và xã/phường
Route::post('/province/search', [GatewayController::class, 'searchProvince']);
Route::post('/ward/search', [GatewayController::class, 'searchWard']);









