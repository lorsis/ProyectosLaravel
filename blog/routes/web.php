<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

// Ruta de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Ruta del listado
Route::get('listado', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ruta de ficha
Route::get('posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->where('id', '[0-9]+')->name('posts_ficha');
