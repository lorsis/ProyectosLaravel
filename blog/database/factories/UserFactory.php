<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * El modelo asociado a esta factory.
     */
    protected $model = Usuario::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "word" → una sola palabra; "unique" para que no se repitan
            'login' => $this->faker->unique()->word(),
            // contraseña simple según enunciado (sin encriptar)
            'password' => $this->faker->word(),
        ];
    }

    /**
     * Opción para estados personalizados si hace falta.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
        ]);
    }
}
