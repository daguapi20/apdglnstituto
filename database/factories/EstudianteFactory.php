<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estudiante;
use Faker\Generator as Faker;

$factory->define(App\Models\Estudiante::class, function (Faker $faker) {
    return [
        'tipodocumento_id' => rand(1,2),
        'dni' => $faker->unique()->isbn10,
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'foto' => $faker->imageUrl($width = 1200, $height = 400),
        'estadocivile_id' => rand(1,4),
        'fecha_nacimiento' => $faker->date(),
        'nacionalidad' => $faker->state,
        'ocupacione_id' => rand(1,6),
        'discapacidad' => $faker->boolean(1,0),
        'tipo_discapacidad' =>$faker->text(10),
        'porcentaje' => rand(1,100),
        'provincia_id' => rand(1,24),
        'cantone_id' => rand(1,221),
        'etnia_id' => rand(1,8),
        'email' => $faker->unique()->email(30),
        'tiposangre_id'=> rand(1,8),
        'miembro_hogar' => $faker->randomDigit,
        'ingreso_ec' => $faker->numberBetween($min = 100, $max = 1600),
        'direccion_provincia_id' => rand(1,24),
        'direccion_cantone_id' => rand(1,221),
        'calle' => $faker->address,
        'telefono_fijo' => $faker->ean8,
        'telefono_movil' => $faker->isbn10,
        'telefono_parentesco' =>$faker->isbn10,
        'parentesco' => $faker->text(10),
        'institucion_origen' => $faker->text(75),
        'titulo_bachillerato' => $faker->text(15),
        'nombre_padre' => $faker->name,
        'padre_ocupacione_id' => rand(1,6),
        'instruccione_id' => rand(1,3),
        'nombre_madre' => $faker->name,
        'madre_ocupacione_id' => rand(1,6),
        'madre_instruccione_id' => rand(1,3),
    ];
});
