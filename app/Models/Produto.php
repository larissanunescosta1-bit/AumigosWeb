<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricaoCurta',
        'descricaoGeral',
        'precoReferencia',
        'imagem',
        'categoria_produtos_id',
        'admin_id'
    ];

    // relacionamentode  produto pertence a categoria
    public function categoria()
    {
        return $this->belongsTo(CategoriaProduto::class, 'categoria_produtos_id');
    }

    // relacionamentode  produto pertence a admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}