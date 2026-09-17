<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PrincipalController;


Route::get('/', [PrincipalController::class, 'index']);
Route::resource('productos', ProductosController::class);

// Route::get('/dashboard', [ProductosController::class, 'index']);

// Route::get('/dashboard/crear', [ProductosController::class, 'create']);
// Route::get('/dashboard/{id}', [ProductosController::class, 'show']);

// Route::post('/dashboard', [ProductosController::class, 'store']);


// Route::get('dashboard/share', [ProductosController::class, 'share']);
