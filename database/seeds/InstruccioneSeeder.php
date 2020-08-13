<?php

use Illuminate\Database\Seeder;
use App\Models\Instruccione;

class InstruccioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instruccione::truncate();

        $instruccione = new Instruccione;
        $instruccione->instruccion = 'Primaria';
        $instruccione->save();

        $instruccione = new Instruccione;
        $instruccione->instruccion = 'Secundaria';
        $instruccione->save();

        $instruccione = new Instruccione;
        $instruccione->instruccion = 'Superior';
        $instruccione->save();
    }
}
