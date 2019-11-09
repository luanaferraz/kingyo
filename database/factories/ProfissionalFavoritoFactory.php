<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfissionalFavorito;
use Faker\Generator as Faker;

$factory->define(ProfissionalFavorito::class, function (Faker $faker) {

    return [
        'pet_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
