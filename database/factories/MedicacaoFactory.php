<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medicacao;
use Faker\Generator as Faker;

$factory->define(Medicacao::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'data' => $faker->word,
        'hora' => $faker->date('Y-m-d H:i:s'),
        'pet_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
