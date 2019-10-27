<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Petdoc;
use Faker\Generator as Faker;

$factory->define(Petdoc::class, function (Faker $faker) {

    return [
        'pet_id' => $faker->randomDigitNotNull,
        'file' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
