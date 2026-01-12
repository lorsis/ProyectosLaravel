<?php

namespace App\Http\Controllers;

// Importem els models que utilitzarem
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
