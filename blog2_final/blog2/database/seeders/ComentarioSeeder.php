<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    public function run(): void
    {
        Post::all()->each(function ($post) {
            Comentario::factory(3)->create([
                'post_id' => $post->id
            ]);
        });
    }
}
