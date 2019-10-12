<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tutor\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
