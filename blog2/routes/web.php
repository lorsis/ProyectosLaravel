<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->where('id', '[0-9]+')
  ->name('posts_ficha');


Route::resource('posts', PostController::class)->only([
    'index',  // listado
    'show',   // ficha
    'create', // creación
    'edit'    // edición
]);

// Rutas resource (index, show, destroy)
Route::resource('posts', PostController::class)->except(['create', 'edit', 'store', 'update']);


Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

