<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPriceController;
use App\Http\Controllers\CurrencyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Productos
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);

// Precios de productos
Route::get('products/{id}/prices', [ProductPriceController::class, 'index']);
Route::post('products/{id}/prices', [ProductPriceController::class, 'store']);

// Monedas (currencies) ruta
Route::post('currencies', [CurrencyController::class, 'store']);
Route::get('currencies', [CurrencyController::class, 'index']);
Route::get('currencies/{id}', [CurrencyController::class, 'show']);
