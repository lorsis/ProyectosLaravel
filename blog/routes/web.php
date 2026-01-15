<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;

// Página principal
Route::get('/', function () {
    $nombre = DB::table('users')->value('name');
    return view('inicio', compact('nombre'));
})->name('inicio');

// Rutas CRUD de posts (index, show, create, edit, destroy)
Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'store', 'edit', 'destroy'])
    ->names([
        'index' => 'posts_listado',
        'show' => 'posts_ficha',
        'create' => 'posts_create',
        'store' => 'posts_store',
        'edit' => 'posts_edit',
        'destroy' => 'posts_destroy'
    ]);


// Ruta de prueba del helper
Route::get('/prueba-helper', [PostController::class, 'pruebaHelper'])->name('prueba_helper');
