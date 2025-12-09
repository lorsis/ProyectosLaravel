<?php

use Illuminate\Support\Facades\Route;

//Sesion 1
Route::get('/posts', function () {
    return 'Listado de posts';
});

//Session 2
//Ejercici 1
//  Ruta de la página de inicio
Route::get('/', function () {
    return "Bienvenido al blog"; // mensaje directo para la página de inicio
})->name('inicio'); // nombre de la ruta inicio

//  Ruta del listado de posts
Route::get('/posts', function () {
    return "Listado de posts"; // mensaje directo para el listado
})->name('posts_listado'); // nombre de la ruta posts_listado

//  Ruta parametrizada de ficha de post
Route::get('/post/{id}', function ($id) {
    return "Ficha del post $id";
})->where('id', '[0-9]+')
  ->name('posts_ficha');

//Ejercicio 2
// Página de inicio
Route::get('/', function () {
    return view('welcome'); // o view('inicio') si quieres otra vista
})->name('inicio');

// Listado de posts
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ficha de post (solo números)
Route::get('/post/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->where('id', '[0-9]+')
  ->name('posts_ficha');

?>


