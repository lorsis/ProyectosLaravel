<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    protected $model = Comentario::class;

    public function definition(): array
    {
        return [
            'contenido' => $this->faker->sentence,
            // Seleccionamos un usuario existente
            'user_id' => User::inRandomOrder()->first()->id,
            // Seleccionamos un post existente
            'post_id' => Post::inRandomOrder()->first()->id,
        ];
    }
}
