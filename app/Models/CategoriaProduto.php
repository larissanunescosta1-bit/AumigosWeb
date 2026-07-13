<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaProduto extends Model
{
    use HasFactory, SoftDeletes;
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