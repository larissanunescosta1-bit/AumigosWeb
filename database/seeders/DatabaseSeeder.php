<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaProduto;
use App\Models\Produto;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Criar 2 admins
        $admins = User::factory(2)->create();

        // Criar 3 categorias
        $categorias = CategoriaProduto::factory(3)->create();

        // Criar 5 produtos
        Produto::factory(5)->create();
}
}
