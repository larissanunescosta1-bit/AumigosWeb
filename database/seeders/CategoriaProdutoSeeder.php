<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaProduto;

class CategoriaProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         CategoriaProduto::create([
            'nome' => 'Laço',
            'descricao' => 'Lacinho pet',
        ]);

        CategoriaProduto::create([
            'nome' => 'Roupinha',
            'descricao' => 'Roupinha fofa',
        ]);
    }
}
