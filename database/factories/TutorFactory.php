<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tutor;
use Faker\Generator as Faker;

$factory->define(Tutor::class, function (Faker $faker) {

    return [
        'usuario_id' => $faker->randomDigitNotNull,
        'pais' => $faker->word,
        'estado' => $faker->word,
        'cidade' => $faker->word,
        'bairro' => $faker->word,
        'rua' => $faker->word,
        'numero' => $faker->word,
        'telefone' => $faker->word
    ];
});
