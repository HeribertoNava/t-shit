<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

// contolador de shirts 
Route::get('/', [ShirtController::class, 'index'])->name('shirts.index');
Route::get('/shirts/{id}', [ShirtController::class, 'show'])->name('shirts.show');

// controlador de carritos
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');