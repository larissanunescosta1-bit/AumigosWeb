<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->text('descricaoCurta');
    $table->text('descricaoGeral');
    $table->float('precoReferencia');
    $table->string('imagem');

    // aqui são as chaves estrangeiras da tabela
    // sempre tem que colocar a tabela depois o foreignId com o id das outras tabelas e depois o constrained 
    $table->foreignId('categoria_produtos_id')->constrained('categoria_produtos');
    $table->foreignId('admin_id')->constrained('admins');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('produtos');
    }
};
