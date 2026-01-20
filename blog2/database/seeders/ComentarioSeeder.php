<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    public function run(): void
    {
        Post::all()->each(function($post) {
            Comentario::factory(3)->create([
                'post_id' => $post->id
            ]);
        });
    }
}
