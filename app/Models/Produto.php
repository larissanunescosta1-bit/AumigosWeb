<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Produto extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nome',
        'descricaoCurta',
        'descricaoGeral',
        'precoReferencia',
        'imagem',
        'categoria_produtos_id',
        'user_id'
    ];

    // relacionamentode  produto pertence a categoria
    public function categoria()
    {
        return $this->belongsTo(CategoriaProduto::class, 'categoria_produtos_id');
    }

    // relacionamentode  produto pertence a admin
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}