<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Asignatura;
use Faker\Generator as Faker;

$factory->define(App\Models\Asignatura::class, function (Faker $faker) {
    return [
        'especialidade_id'=>rand(1,4),
        'periodo_id'=>rand(1,5),
        'cod_asignatura'=>$faker->unique()->bothify('##??#'),
        'nombre'=>$faker->text(40),
        'hora' =>$faker->bothify('##'),
    ];
});
