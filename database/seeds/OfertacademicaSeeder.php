<?php

use Illuminate\Database\Seeder;
use App\Models\Ofertacademica;

class OfertacademicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ofertacademica::truncate(); 

        $ofertacademica = new Ofertacademica;
        $ofertacademica->nombre = 'Tecnología';
        $ofertacademica->duracion = '5 periodos';
        $ofertacademica->save();

        $ofertacademica = new Ofertacademica;
        $ofertacademica->nombre = 'Técnico Superior';
        $ofertacademica->duracion = '4 periodos';
        $ofertacademica->save();
    }
}
