<?php

use Illuminate\Database\Seeder;
use App\Models\Periodacademico;

class PeriodacademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periodacademico::truncate();

        $periodacademico = new Periodacademico;
        $periodacademico->periodo = 'Febrero 2021 - Septiembre 2021';
        $periodacademico->condicion = '1';
        $periodacademico->fecha_inicio = '2021_01_06';
        $periodacademico->fecha_final = '2021_09_06';
        $periodacademico->save();

        $periodacademico = new Periodacademico;
        $periodacademico->periodo = 'Octubre 2021 - Marzo 2022';
        $periodacademico->condicion = '2';
        $periodacademico->fecha_inicio = '2021_09_15';
        $periodacademico->fecha_final = '2022_03_15';
        $periodacademico->save();
    }
}
