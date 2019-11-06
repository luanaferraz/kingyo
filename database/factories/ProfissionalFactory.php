<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profissional;
use Faker\Generator as Faker;

$factory->define(Profissional::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'profissao' => $faker->word,
        'pais' => $faker->word,
        'estado' => $faker->word,
        'cidade' => $faker->word,
        'bairro' => $faker->word,
        'rua' => $faker->word,
        'numero' => $faker->word,
        'visualizacao' => $faker->word,
        'telefone' => $faker->word,
        'usuario_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
