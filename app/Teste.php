<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'pontuacaoMinima',
        'user_criador_id'
    ];
}
