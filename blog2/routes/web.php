<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de posts usando resource
Route::resource('posts', PostController::class)->only([
    'index',   // listado
    'show',    // ficha
    'create',  // creación
    'store',   // almacenamiento
    'edit',     // edición
    'update',   // actualización
    'destroy'  // eliminación
]);

// Rutas personalizadas de prueba (si las necesitas)
Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('posts.nuevoPrueba');
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('posts.editarPrueba');
Route::resource('posts', PostController::class);

