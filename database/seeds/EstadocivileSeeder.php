<?php

use Illuminate\Database\Seeder;
use App\Models\Estadocivile;

class EstadocivileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadocivile::truncate();

        $estadocivile = new Estadocivile;
        $estadocivile->estado_civil = 'Soltero';
        $estadocivile->save();

        $estadocivile = new Estadocivile;
        $estadocivile->estado_civil = 'Casado';
        $estadocivile->save();

        $estadocivile = new Estadocivile;
        $estadocivile->estado_civil = 'Divorciado';
        $estadocivile->save();

        $estadocivile = new Estadocivile;
        $estadocivile->estado_civil = 'Viudo';
        $estadocivile->save();
    }
}
