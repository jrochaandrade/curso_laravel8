<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            /* 'email_verified_at' => now(), */
            'senha' => '123456789', // password
            /* 'remember_token' => Str::random(10), */
            'nivel' => $this->faker->name('usuario'),
        ];
    }
}
