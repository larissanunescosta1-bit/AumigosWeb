<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Produto::create([
            'nome' => 'Lacinho luxo',
            'descricaoCurta' => 'lacinho lindo',
            'descricaoGeral' => 'Lacinho lindinho e fof para seu pet usar no dia a dia',
            'precoReferencia' => 15.90,
            'imagem' => '.jpg',
            'categoria_produtos_id' => 1,
            'admin_id' => 1,
        ]);

       Produto::create([
    'nome' => 'Bandana Pet',
    'descricaoCurta' => 'Acessório estiloso para pets',
    'descricaoGeral' => 'Bandana confortável e ajustável, ideal para deixar seu pet mais bonito',
    'precoReferencia' => 24.90,
    'imagem' => 'bandana.jpg',
    'categoria_produtos_id' => 2,
    'admin_id' => 1,
]);
    }
}
