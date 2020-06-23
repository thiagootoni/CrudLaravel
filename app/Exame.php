<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    //
    protected $fillable = [
        'id',
        'teste_id',
        'user_resposta_id',
        'notaFinal',
        'foiRealizado',
    ];
}
