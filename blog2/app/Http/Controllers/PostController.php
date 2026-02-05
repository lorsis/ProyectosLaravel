<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Comentario;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function  construct() { 
        $this->middleware('auth', ['only' => 
        ['create', 'store', 'edit', 'update', 'destroy']]); } 

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
       // echo"Prova";
    return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validar solo los campos que vienen del formulario
   // $request->validate([
       // 'titulo' => 'required|max:255',
       // 'contenido' => 'required',

    //]);

    // Crear el post con usuario_id del usuario autenticado
    Post::create([
        'titulo' => $request->titulo,
        'contenido' => $request->contenido,
       'usuario_id' => auth()->id(),


    ]);

    return redirect()->route('posts.index')->with('success', 'Post creado correctamente.');
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
          $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    /*$request->validate([
        'titulo' => 'required|max:255',
        'contenido' => 'required',
    ]);*/

    $post = Post::findOrFail($id);
    $post->update([
        'titulo' => $request->titulo,
        'contenido' => $request->contenido,
    ]);

    return redirect()->route('posts.index')->with('success', 'Post actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    Comentario::where('post_id', $id)->delete();
    Post::findOrFail($id)->delete();
    return redirect()->route('posts.index')->with('success', 'Post eliminado correctamente.');
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
public function __construct()
{
    //$this->middleware('auth')->except(['index', 'show']);
}


}
