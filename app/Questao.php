<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    //
    protected $fillable = [
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

    public function teste(){
        return $this->belongsTo(Teste::class);
    }
}
