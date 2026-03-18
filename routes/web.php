<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/order/create', [OrderController::class, 'Create']);
Route::post('/order/store', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
