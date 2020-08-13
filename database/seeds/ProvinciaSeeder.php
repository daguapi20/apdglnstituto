<?php

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::truncate();

        $provincia = new Provincia;
        $provincia->provincia = 'Azuay';
        $provincia->cod_provincia = '01';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Bolívar';
        $provincia->cod_provincia = '02';
        $provincia->save();
        
        $provincia = new Provincia;
        $provincia->provincia = 'Cañar';
        $provincia->cod_provincia = '03';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Carchi';
        $provincia->cod_provincia = '04';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Cotopaxi';
        $provincia->cod_provincia = '05';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Chimborazo';
        $provincia->cod_provincia = '06';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'El Oro';
        $provincia->cod_provincia = '07';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Esmeraldas';
        $provincia->cod_provincia = '08';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Guayas';
        $provincia->cod_provincia = '09';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Imbabura';
        $provincia->cod_provincia = '10';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Loja';
        $provincia->cod_provincia = '11';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Los Ríos';
        $provincia->cod_provincia = '12';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Manabí';
        $provincia->cod_provincia = '13';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Morona Santiago';
        $provincia->cod_provincia = '14';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Napo';
        $provincia->cod_provincia = '15';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Pastaza';
        $provincia->cod_provincia = '16';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Pichincha';
        $provincia->cod_provincia = '17';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Tungurahua';
        $provincia->cod_provincia = '18';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Zamora Chinchipe';
        $provincia->cod_provincia = '19';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Galápagos';
        $provincia->cod_provincia = '20';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Sucumbíos';
        $provincia->cod_provincia = '21';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Orellana';
        $provincia->cod_provincia = '22';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Santo Domingo de los Tsáchilas';
        $provincia->cod_provincia = '23';
        $provincia->save();

        $provincia = new Provincia;
        $provincia->provincia = 'Santa Elena';
        $provincia->cod_provincia = '24';
        $provincia->save();

    }
}
