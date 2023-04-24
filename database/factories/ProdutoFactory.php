<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->unique()->word,
            'descricao' => $this->faker->text(),
            'valor' => $this->faker->numberBetween(1, 10),
            'estoque' => $this->faker->numberBetween(1, 10),
            'descricao2' => $this->faker->text(),
        ];
    }
}
