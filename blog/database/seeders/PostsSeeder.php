<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $usuarios = Usuario::all();

        $usuarios->each(function ($usuario) {
            Post::factory()
                ->count(3)
                ->create([
                    'usuario_id' => $usuario->id,
                ]);
        });
    }
}
