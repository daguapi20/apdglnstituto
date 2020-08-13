<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Matricula;
use Faker\Generator as Faker;

$factory->define(App\Models\Matricula::class, function (Faker $faker) {
    return [
        'asignacione_id'=>rand(1,4),
        'estudiante_id'=>rand(1,150),
        'tipomatricula_id'=>rand(1,3),
        'fecha_matricula'=>$faker->date,
    ];
});
