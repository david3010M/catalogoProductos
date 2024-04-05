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
Route::get('marcas', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
Route::get('marcas/{id}', [MarcaController::class, 'show'])->name('marcas.show');

// Categorias
Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

// Unidades
Route::get('unidades', [UnidadController::class, 'index'])->name('unidades.index');
Route::get('unidades/create', [UnidadController::class, 'create'])->name('unidades.create');
Route::get('unidades/{id}', [UnidadController::class, 'show'])->name('unidades.show');

// Productos
Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
