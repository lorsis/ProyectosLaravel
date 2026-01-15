<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listado de posts con paginación y relación con usuario
    public function index()
    {
        // Si no hay base de datos aún, usar array de ejemplo
        if (!class_exists('App\Models\Post')) {
            $posts = [
                ['id' => 1, 'titulo' => 'Post 1', 'usuario' => ['name' => 'Usuario 1']],
                ['id' => 2, 'titulo' => 'Post 2', 'usuario' => ['name' => 'Usuario 2']],
                ['id' => 3, 'titulo' => 'Post 3', 'usuario' => ['name' => 'Usuario 3']],
            ];
            return view('posts.listado', compact('posts'));
        }

        // Con base de datos: cargar relación con usuario
        $posts = Post::with('usuario')->orderBy('titulo', 'ASC')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Mostrar un solo post
    public function show(Post $post)
    {
        // Si no hay base de datos
        if (!class_exists('App\Models\Post')) {
            return view('posts.ficha', ['id' => $post->id ?? null]);
        }

        return view('posts.show', compact('post'));
    }

    // Borrar un post
    public function destroy(Post $post)
    {
        if (class_exists('App\Models\Post')) {
            $post->delete();
        }

        return redirect()->route('posts_listado');
    }

    // Crear post
    public function create()
    {
        return view('posts.create');
    }

    // Editar post
    public function edit(Post $post)
    {
        // Si no hay base de datos, pasar id
        if (!class_exists('App\Models\Post')) {
            return view('posts.edit', ['id' => $post->id ?? null]);
        }

        return view('posts.edit', compact('post'));
    }

    // PRUEBA DEL HELPER
    public function pruebaHelper()
    {
        $fecha = fechaActual("Y-m-d");
        return "La fecha actual es: $fecha";
    }
}
