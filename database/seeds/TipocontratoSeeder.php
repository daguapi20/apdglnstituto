<?php

use Illuminate\Database\Seeder;
use App\Models\Tipocontrato;

class TipocontratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipocontrato::truncate();
        
        $tipocontrato = new Tipocontrato;
        $tipocontrato->tipo = 'OCACIONAL';
        $tipocontrato->save();

        $tipocontrato = new Tipocontrato;
        $tipocontrato->tipo = 'TIEMPO COMPLETO';
        $tipocontrato->save();

        $tipocontrato = new Tipocontrato;
        $tipocontrato->tipo = 'CONTRATO DE PRESTACION DE SERVICIOS PROFESIONALES ';
        $tipocontrato->save();

    }
}
