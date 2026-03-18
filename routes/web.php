<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/order/create', [OrderController::class, 'Create']);
Route::post('/order/store', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
Route::delete('/order/destroy/{id}', [OrderController::class, 'destroy']);
Route::get('/order/edit/{id}', [OrderController::class, 'edit']);
Route::put('/order/update/{id}', [OrderController::class, 'update']);


