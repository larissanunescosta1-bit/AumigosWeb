<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $table = 'categoria_produtos';

    protected $fillable = [
        'nome',
        'descricao'
    ];

   
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}