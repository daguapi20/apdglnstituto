<?php

use Illuminate\Database\Seeder;
use App\Models\Estadocente;

class EstadocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadocente::truncate();

        $estadocente = new Estadocente;
        $estadocente->estado = 'activo';
        $estadocente->save();

        $estadocente = new Estadocente;
        $estadocente->estado = 'Desactivo';
        $estadocente->save();
    }
}
