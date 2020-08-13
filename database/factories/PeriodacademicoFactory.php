<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Periodacademico;
use Faker\Generator as Faker;

$factory->define(Periodacademico::class, function (Faker $faker) {
    return [
        'periodo' => $faker->text,
       
    ];
});
