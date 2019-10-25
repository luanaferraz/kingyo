<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vacina;
use Faker\Generator as Faker;

$factory->define(Vacina::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'dataAplicacao' => $faker->word,
        'dataProxima' => $faker->word,
        'pet_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
