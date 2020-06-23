<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    //
    protected $fillable = [
        'id',
        'enunciado',
        'respostaA',
        'respostaB',
        'respostaC',
        'respostaD',
        'respostaE',
        'respostaCorreta',
        'valorDaQuestao',
        'teste_id'
    ];
}
