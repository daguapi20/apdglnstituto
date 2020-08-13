<?php

use Illuminate\Database\Seeder;
use App\Models\Tiposangre;

class TiposangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiposangre::truncate();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'A+';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'A-';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'B+';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'B-';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'AB+';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'AB-';
        $tiposangre->save();

        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'O+';
        $tiposangre->save();
        
        $tiposangre = new Tiposangre;
        $tiposangre->tipo = 'O-';
        $tiposangre->save();
    }
}
