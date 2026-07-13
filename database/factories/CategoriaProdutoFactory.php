<?php

namespace Database\Factories;

use App\Models\CategoriaProduto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CategoriaProduto>
 */
class CategoriaProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nome' => fake()->word(),
            'descricao' => fake()->paragraph(),
        ];
    }
}
