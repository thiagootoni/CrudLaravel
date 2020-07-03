<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Teste::class, function (Faker $faker) {
    return [
        'nome' => $faker->words(4, true),
        'pontuacaoMinima' => 60,
        'user_criador_id' => rand(1,10),
    ];
});
