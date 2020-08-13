<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Asignacione;
use Faker\Generator as Faker;

$factory->define(App\Models\Asignacione::class, function (Faker $faker) {
    return [
        'periodacademico'=>rand(1,2),
        'especialidades'=>rand(1,4),
        'periodos'=>rand(1,5),
        'secciones'=>rand(1,3),
        'paralelos'=>rand(1,4),
    ];
});
