<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SupplierController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/inventories/products', [InventoryController::class, 'getProducts']);
Route::post('/store/location', [LocationController::class, 'storeLocation']);

Route::post('/store/supplier-groups', [SupplierController::class, 'storeSupplierGroup']);

Route::post('/province/search', [LocationController::class, 'searchProvince']);  //tỉnh 
Route::post('/ward/search', [LocationController::class, 'searchWard']); // phường xã 


Route::get('/supplier', [SupplierController::class, 'getSupplier']);
Route::post('/store/supplier', [SupplierController::class, 'storeSupplier']);
Route::put('update/supplier/{id}', [SupplierController::class, 'updateSupplier']);
Route::delete('/delete/supplier/{id}', [SupplierController::class, 'deleteSupplier']); // xóa tạm có thể restore được 
Route::put('/suppliers/{id}/restore', [SupplierController::class, 'restoreSupplier']);
Route::post('/supplier/status/{id}', [SupplierController::class, 'changeStatusSupplier']);

