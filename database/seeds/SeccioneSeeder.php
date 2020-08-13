<?php

use Illuminate\Database\Seeder;
use App\Models\Seccione;

class SeccioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccione::truncate(); 

        $secciones = new Seccione;
        $secciones->nombre = 'Diurno';
        $secciones->save();

        $secciones = new Seccione;
        $secciones->nombre = 'Nocturno A';
        $secciones->save();

        $secciones = new Seccione;
        $secciones->nombre = 'Nocturno B';
        $secciones->save();
    }
}
