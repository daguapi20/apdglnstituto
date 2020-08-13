<?php

use Illuminate\Database\Seeder;
use App\Models\Periodo;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periodo::truncate(); 

        $periodo = new Periodo;
        $periodo->nombre = 'Periodo I';
        $periodo->save();

        $periodo = new Periodo;
        $periodo->nombre = 'Periodo II';
        $periodo->save();

        $periodo = new Periodo;
        $periodo->nombre = 'Periodo III';
        $periodo->save();
      
        $periodo = new Periodo;
        $periodo->nombre = 'Periodo VI';
        $periodo->save();
        
        $periodo = new Periodo;
        $periodo->nombre = 'Periodo V';
        $periodo->save();
    }
}
