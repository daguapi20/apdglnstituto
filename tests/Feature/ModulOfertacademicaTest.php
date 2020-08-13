<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModulOfertacademicaTest extends TestCase
{
  // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     *@test
     */
    
    function registro_de_oferta_academica()
    {
        $ofertacademicaData=[
            'nombre'=>'Maestria',
            //'duracion'=>'4 periodos',
        ];

        $response = $this->put(route('ofertacademicas'), $ofertacademicaData);

        $this->assertDatabaseHas('ofertacademicas',[
                'nombre'=>'Maestria',
                //'duracion'=>'4 periodos',
            ]);
        
    }
}
