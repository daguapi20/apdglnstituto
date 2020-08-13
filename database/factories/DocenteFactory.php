<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Docente;
use Faker\Generator as Faker;

$factory->define(App\Models\Docente::class, function (Faker $faker) {
    return [
        'dni' =>$faker->unique()->isbn10, 
        'nombre' => $faker->name,
        'apellido' =>  $faker->lastName,
        'email' => $faker->unique()->email(30),
        'titulo_academico' => $faker->text(15),
        'fecha_ingreso' => $faker->date(),
        'telefono_fijo' => $faker->ean8,
        'telefono_movil' => $faker->isbn10,
        'provincia_id' => rand(1,24),
        'cantone_id' => rand(1,221),
        'calle' =>$faker->address, 
        'estadocente_id' => rand(1,2),
        'tipocontrato_id' => rand(1,3), 
    ];
});
