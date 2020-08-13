<?php

use Illuminate\Database\Seeder;
use App\Models\Tipodocumento;

class TipodocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipodocumento::truncate(); 

        $tipodocumento = new Tipodocumento;
        $tipodocumento->tipo = 'Cédula';
        $tipodocumento->save();

        $tipodocumento = new Tipodocumento;
        $tipodocumento->tipo = 'Pasaporte';
        $tipodocumento->save();
    }
}
