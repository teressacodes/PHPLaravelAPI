<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    //Route::get('/products', [ProductController::class, 'index']);
    Route::resource('products', ProductController::class);
    Route::get('products/search/{name}', [ProductController::class, 'search', '$name']);
});
