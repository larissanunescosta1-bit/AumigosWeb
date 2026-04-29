<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'password'
    ];

    // relacionamento de  um admin tem para os varios produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}