<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    //
    protected $fillable = [
        'nome',
        'pontuacaoMinima',
        'user_criador_id'
    ];

    public function questoes(){
        return $this->hasMany(Questao::class);
    }
}
