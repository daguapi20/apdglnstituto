<?php

use Illuminate\Database\Seeder;
use App\Models\Especialidade;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidade::truncate(); 

        $especialidade = new Especialidade;
        $especialidade->ofertacademica_id = '1';
        $especialidade->nombre = 'Desarrollo de Software';
        $especialidade->save();

        $especialidade = new Especialidade;
        $especialidade->ofertacademica_id = '1';
        $especialidade->nombre = 'Contabilidad';
        $especialidade->save();

        $especialidade = new Especialidade;
        $especialidade->ofertacademica_id = '2';
        $especialidade->nombre = 'Enfermería';
        $especialidade->save();

        $especialidade = new Especialidade;
        $especialidade->ofertacademica_id = '2';
        $especialidade->nombre = 'Odontología';
        $especialidade->save();
    }
}
