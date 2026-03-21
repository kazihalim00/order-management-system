<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/order/create', [OrderController::class, 'create']);
    Route::post('/order/store', [OrderController::class, 'store']);
    Route::get('/order/edit/{id}', [OrderController::class, 'edit']);
    Route::post('/order/update/{id}', [OrderController::class, 'update']);
    Route::get('/order/delete/{id}', [OrderController::class, 'destroy']);

});


require __DIR__ . '/auth.php';