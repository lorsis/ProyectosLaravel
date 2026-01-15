<?php
public function destroy($id)
{
    Post::findOrFail($id)->delete();
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}
