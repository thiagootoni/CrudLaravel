<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    //
    protected $fillable = [
        'teste_id',
        'user_resposta_id',
        'notaFinal',
        'foiAprovado',
        'foiRealizado',
    ];

    public function Teste(){
        return $this->belongsTo(Teste::class);
    }

    public function User(){
        return $this->belongsTo(User::class, 'user_resposta_id');
    }
}
