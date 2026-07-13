<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use App\Models\CategoriaProduto;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nome' => fake()->words(3, true),
            'descricaoCurta' => fake()->sentence(),
            'descricaoGeral' => fake()->paragraph(),
            'precoReferencia' => fake()->randomFloat(2, 10, 1000),
            'imagem' => 'produto.jpg',

            'categoria_produtos_id' => CategoriaProduto::factory(),
            'admin_id' => Admin::factory(),
        ];
    }
}
