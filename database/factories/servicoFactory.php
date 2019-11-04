<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\servico;
use Faker\Generator as Faker;

$factory->define(servico::class, function (Faker $faker) {

    return [
        'descricao' => $faker->word,
        'custo' => $faker->word,
        'profissional_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
