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

// Obtener la fecha y hora actual
$fechaHora = date('d/m/Y H:i:s'); // formato: día/mes/año hora:min:seg

return view('posts.index', compact('posts', 'fechaHora'));


    }

    // Mostrar un solo post
    public function show(Post $post)
    {
        if (!class_exists('App\Models\Post')) {
            return view('posts.ficha', ['id' => $post->id ?? null]);
        }

        return view('posts.show', compact('post'));
    }

    // Mostrar formulario para crear post
    public function create()
    {
        return view('posts.create');
    }

    // Guardar nuevo post
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        // Crear post en base de datos
        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('posts_listado')->with('success', 'Post creado correctamente');
    }

    // Mostrar formulario de edición
    public function edit(Post $post)
    {
        if (!class_exists('App\Models\Post')) {
            return view('posts.edit', ['id' => $post->id ?? null]);
        }

        return view('posts.edit', compact('post'));
    }

    // Actualizar post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('posts_listado')->with('success', 'Post actualizado correctamente');
    }

    // Borrar post
    public function destroy(Post $post)
    {
        if (class_exists('App\Models\Post')) {
            $post->delete();
        }

        return redirect()->route('posts_listado')->with('success', 'Post eliminado correctamente');
    }

    // PRUEBA DEL HELPER
    public function pruebaHelper()
    {
        $fecha = fechaActual("Y-m-d");
        return "La fecha actual es: $fecha";
    }
}
