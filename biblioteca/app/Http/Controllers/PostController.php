<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Dades que s'envien a la vista
        $posts = [
            ["titulo" => "Primer post", "autor" => "Autor1"],
            ["titulo" => "Segundo post", "autor" => "Autor2"]
        ];

        // Retornem la vista amb les dades
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        return view('posts.show', compact('id'));
    }

    public function create()
    {
        return "Nuevo post";
    }

    public function edit($id)
    {
        return "Edición de post";
    }
}


?>
