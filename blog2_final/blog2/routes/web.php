<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

// Inicio: redirige al listado
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Autenticación manual
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.attempt');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Posts
Route::resource('posts', PostController::class);

// Rutas de prueba (quedan como estaban, pero quedan protegidas por middleware en el controlador)
Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('posts.nuevoPrueba');
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('posts.editarPrueba');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('rol:admin');
