<?php

use Illuminate\Database\Seeder;
use App\Models\Estadestudiante;

class EstadestudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadestudiante::truncate();

        $estadestudiante = new Estadestudiante;
        $estadestudiante->estado = 'Activo';
        $estadestudiante->save();

        $estadestudiante = new Estadestudiante;
        $estadestudiante->estado = 'Inactivo';
        $estadestudiante->save();
    }
}
