<?php

use Illuminate\Database\Seeder;
use App\Models\Ocupacione;

class OcupacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ocupacione::truncate();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Estudiante';
        $ocupacione->save();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Comerciante';
        $ocupacione->save();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Agricultor';
        $ocupacione->save();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Chofer';
        $ocupacione->save();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Servidor Publico';
        $ocupacione->save();

        $ocupacione = new Ocupacione;
        $ocupacione->ocupacion = 'Otro';
        $ocupacione->save();
    }
}
