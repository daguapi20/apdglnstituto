<?php

use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignatura::truncate(); 
        
        factory(App\Models\Asignatura::class, 102)->create();
       
        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '1';
        $asignatura->periodo_id= '1';
        $asignatura->cod_asignatura = 'd001';
        $asignatura->nombre = 'TÉCNICAS DE EXPRESIÓN ORAL Y ESCRITA';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '1';
        $asignatura->periodo_id= '2';
        $asignatura->cod_asignatura = 'd002';
        $asignatura->nombre = 'PROYECTOS DE INVERSIÓN TECNOLÓGICOS';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '1';
        $asignatura->periodo_id= '3';
        $asignatura->cod_asignatura = 'd003';
        $asignatura->nombre = 'ANÁLISIS Y DISEÑO DE SISTEMAS';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '1';
        $asignatura->periodo_id= '4';
        $asignatura->cod_asignatura = 'd004';
        $asignatura->nombre = 'PROGRAMACIÓN SQL';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '1';
        $asignatura->periodo_id= '5';
        $asignatura->cod_asignatura = 'd005';
        $asignatura->nombre = 'AUDITORÍA DE SISTEMAS';
        $asignatura->hora = '40';
        $asignatura->save();
/////
        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '2';
        $asignatura->periodo_id= '1';
        $asignatura->cod_asignatura = 'd006';
        $asignatura->nombre = 'ETNIA, GENERO Y SABERES ANCENTRALES';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '2';
        $asignatura->periodo_id= '2';
        $asignatura->cod_asignatura = 'd007';
        $asignatura->nombre = 'METODOLOGIA DE LA INVESTIGACION';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '2';
        $asignatura->periodo_id= '3';
        $asignatura->cod_asignatura = 'd008';
        $asignatura->nombre = 'ESTADISTICA I ';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '2';
        $asignatura->periodo_id= '4';
        $asignatura->cod_asignatura = 'd009';
        $asignatura->nombre = 'ESTADISTICA II ';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '2';
        $asignatura->periodo_id= '5';
        $asignatura->cod_asignatura = 'd0010';
        $asignatura->nombre = 'ETICA PROFESIONAL SOCIAL Y PERSONA';
        $asignatura->hora = '40';
        $asignatura->save();
/////

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '3';
        $asignatura->periodo_id= '1';
        $asignatura->cod_asignatura = 'd0011';
        $asignatura->nombre = 'ENFERMERÍA BASICA I';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '3';
        $asignatura->periodo_id= '2';
        $asignatura->cod_asignatura = 'd0012';
        $asignatura->nombre = 'ENFERMERÍA BÁSICA II ';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '3';
        $asignatura->periodo_id= '3';
        $asignatura->cod_asignatura = 'd0013';
        $asignatura->nombre = 'ENFERMERÍA FAMILIAR Y COMUNITARIA  ';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '3';
        $asignatura->periodo_id= '4';
        $asignatura->cod_asignatura = 'd0014';
        $asignatura->nombre = 'SALUD SEXUAL Y REPRODUCTIVA ';
        $asignatura->hora = '40';
        $asignatura->save();

///
        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '4';
        $asignatura->periodo_id= '1';
        $asignatura->cod_asignatura = 'd0015';
        $asignatura->nombre = 'ETICA PROFESIONAL';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '4';
        $asignatura->periodo_id= '2';
        $asignatura->cod_asignatura = 'd0016';
        $asignatura->nombre = 'METODOLOGIA DE LA INVESTIGACION';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '4';
        $asignatura->periodo_id= '3';
        $asignatura->cod_asignatura = 'd0017';
        $asignatura->nombre = 'ADMINSTRACION DE CLINICA O COSULTORIO DENTAL ';
        $asignatura->hora = '40';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->especialidade_id = '4';
        $asignatura->periodo_id= '4';
        $asignatura->cod_asignatura = 'd0018';
        $asignatura->nombre = 'ODONTOPEDIATRIA';
        $asignatura->hora = '40';
        $asignatura->save();
    }
}
