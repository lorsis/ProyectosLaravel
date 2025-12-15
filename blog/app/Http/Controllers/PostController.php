<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    // Listado
    public function index()
    {
        return view('posts.listado');
    }

    // Ficha (show)
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }

    // Crear
   public function create(): RedirectResponse
{
    return redirect()->route('inicio');
}

    // Editar
   public function edit($post): RedirectResponse
{
    return redirect()->route('inicio');
}
}
