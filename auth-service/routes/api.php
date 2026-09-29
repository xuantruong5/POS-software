<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/test', [ClientController::class, 'test']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user-system', [AuthController::class, 'userSystem'])
    ->middleware('system.user');

    




