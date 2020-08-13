<?php

use Illuminate\Database\Seeder;
use App\Models\Tipomatricula;

class TipomatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipomatricula::truncate();
        
        $tipomatricula = new Tipomatricula;
        $tipomatricula->tipo = 'Ordinaria';
        $tipomatricula->save();

        $tipomatricula = new Tipomatricula;
        $tipomatricula->tipo = 'Extraordinaria';
        $tipomatricula->save();

        $tipomatricula = new Tipomatricula;
        $tipomatricula->tipo = 'Especial';
        $tipomatricula->save();
    }
}
