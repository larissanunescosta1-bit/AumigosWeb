<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaProduto;
use App\Models\Produto;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Criar 1 admin fixo 
         User::firstOrCreate(
            ['email' => 'lala@gmail.com'],
            [
                'name' => 'Lari',
                'password' => Hash::make('1234'),
            ]
        );

        // Criar 3 categorias
        $categorias = CategoriaProduto::factory(3)->create();

        // Criar 5 produtos
        Produto::factory(5)->create();
}
}
