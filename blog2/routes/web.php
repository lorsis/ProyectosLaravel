<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LoginController;

// Página de inicio
Route::get('/', function () {
    return view('auth.login');
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

Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('posts.nuevoPrueba');
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('posts.editarPrueba');
Route::resource('posts', PostController::class);
//Login
//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
//Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Rutes a protegir
Route::middleware(['auth'])->resource('posts', PostController::class) ->except(['index', 'show']); 
Route::resource('posts', PostController::class)->only(['index', 'show']); 

