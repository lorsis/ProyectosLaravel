<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $posts = Post::orderBy('titulo', 'asc')->paginate(5);
    return view('posts.index', compact('posts'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return redirect()->route('inicio'); // /posts/crear -> /

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
  public function show($id)
{
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return redirect()->route('inicio'); // /posts/{id}/editar -> /

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    Post::findOrFail($id)->delete();
    $posts = Post::orderBy('titulo', 'asc')->paginate(5);
    return view('posts.index', compact('posts'));
}
// Crear post aleatorio
public function nuevoPrueba()
{
    Post::create([
        'titulo' => 'Título ' . rand(1, 1000),
        'contenido' => 'Contenido ' . rand(1, 1000),
    ]);

    return redirect()->route('posts.index');
}

// Editar post aleatorio
public function editarPrueba($id)
{
    $post = Post::findOrFail($id);
    $post->titulo = 'Título ' . rand(1, 1000);
    $post->contenido = 'Contenido ' . rand(1, 1000);
    $post->save();

    return redirect()->route('posts.show', $id);
}


}
