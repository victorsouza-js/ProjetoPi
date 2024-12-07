<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'qtd_estoque',
    ];

}
