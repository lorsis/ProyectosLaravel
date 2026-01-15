<?php

namespace App\Http\Controllers;

/*abstract class Controller
{
    //
}


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'titulo' => 'Primer post'],
            ['id' => 2, 'titulo' => 'Segundo post']
        ];

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = ['id' => $id, 'titulo' => "Post $id", 'contenido' => "Contenido del post $id"];

        return view('posts.show', compact('post'));
    }
}*/


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

