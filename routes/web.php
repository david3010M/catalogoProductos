<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UnidadController;
use Illuminate\Support\Facades\Route;


// Home
Route::get('/', HomeController::class);

// Marcas
Route::get('marcas', [MarcaController::class, 'index']);
Route::get('marcas/create', [MarcaController::class, 'create']);
Route::get('marcas/{marca}', [MarcaController::class, 'show']);

// Categorias
Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categorias/create', [CategoriaController::class, 'create']);
Route::get('categorias/{categoria}', [CategoriaController::class, 'show']);

// Unidades
Route::get('unidades', [UnidadController::class, 'index']);
Route::get('unidades/create', [UnidadController::class, 'create']);
Route::get('unidades/{unidad}', [UnidadController::class, 'show']);

// Productos
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
