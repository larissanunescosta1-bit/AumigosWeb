<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory, SoftDeletes;
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