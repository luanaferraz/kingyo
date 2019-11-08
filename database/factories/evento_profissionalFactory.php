<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\evento_profissional;
use Faker\Generator as Faker;

$factory->define(evento_profissional::class, function (Faker $faker) {

    return [
        'dialivre' => $faker->word,
        'diaocupado' => $faker->word,
        'tipo' => $faker->word,
        'descricao' => $faker->word,
        'data' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'profissional_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'horario' => $faker->word
    ];
});
