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
Route::post('marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::get('marcas/edit/{id}', [MarcaController::class, 'edit'])->name('marcas.edit');
Route::post('marcas/update/{id}', [MarcaController::class, 'update'])->name('marcas.put');
Route::get('marcas/delete/{id}', [MarcaController::class, 'delete'])->name('marcas.delete');
Route::post('marcas/destroy/{id}', [MarcaController::class, 'destroy'])->name('marcas.destroy');

// Categorias
Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::post('categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('categorias/update/{id}', [CategoriaController::class, 'update'])->name('categorias.put');
Route::get('categorias/delete/{id}', [CategoriaController::class, 'delete'])->name('categorias.delete');
Route::post('categorias/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

// Unidades
Route::get('unidades', [UnidadController::class, 'index'])->name('unidades.index');
Route::get('unidades/create', [UnidadController::class, 'create'])->name('unidades.create');
Route::get('unidades/{id}', [UnidadController::class, 'show'])->name('unidades.show');
Route::post('unidades', [UnidadController::class, 'store'])->name('unidades.store');
Route::get('unidades/edit/{id}', [UnidadController::class, 'edit'])->name('unidades.edit');
Route::post('unidades/update/{id}', [UnidadController::class, 'update'])->name('unidades.put');
Route::get('unidades/delete/{id}', [UnidadController::class, 'delete'])->name('unidades.delete');
Route::post('unidades/destroy/{id}', [UnidadController::class, 'destroy'])->name('unidades.destroy');

// Productos
Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::post('productos/update/{id}', [ProductoController::class, 'update'])->name('productos.put');
Route::get('productos/delete/{id}', [ProductoController::class, 'delete'])->name('productos.delete');
Route::post('productos/destroy/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
