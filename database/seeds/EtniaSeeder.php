<?php

use Illuminate\Database\Seeder;
use App\Models\Etnia;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    {
        etnia::truncate();

        $etnia = new Etnia;
        $etnia->etnia = 'Indígena';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Afroecuatoriano';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Negro';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Mulato';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Montuvio';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Mestizo';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'Blanco';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'otro';
        $etnia->save();

        $etnia = new Etnia;
        $etnia->etnia = 'No registra';
        $etnia->save();

    }
}
