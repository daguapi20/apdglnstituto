<?php

namespace App\Http\Controllers;

use App\Models\Asignacione;
use App\Models\Periodacademico;
use App\Models\Especialidade;
use App\Models\Especialidade_periodacademico;
use App\Models\Periodo;
use App\Models\Seccione;
use App\Models\Paralelo;
use Illuminate\Http\Request;

class AsignacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consultas   
        $asignaciones = Asignacione::with(['especialidades','periodacademicos', 'periodos', 'secciones', 'paralelos'])->get();
        return view('asignaciones.index', compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodacademicos = Periodacademico::all();
        $especialidades =Especialidade_periodacademico::
           join('especialidades','especialidades.id','=','Especialidade_periodacademico.especialidade_id')
           ->select('Especialidade_periodacademico.especialidade_id','especialidades.nombre','Especialidade_periodacademico.periodacademico_id')
           ->get();
        $periodos = Periodo::all();
        $secciones = Seccione::all();
        $paralelos = Paralelo::all();
        $asignaciones = Asignacione::all();
        return view('asignaciones.create', compact('asignaciones', 'periodacademicos', 'especialidades', 'periodos', 'secciones', 'paralelos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'periodacademicos' => ['required'],
            'especialidades'=>['required'],
            'periodos'=>['required'],
            'secciones' => ['required'],
            'paralelos' => ['required'],
        ]);

        $asignacione = Asignacione::create($data); 
        $asignacione->periodacademicos()->sync($request->get('periodacademicos'));   
        $asignacione->especialidades()->sync($request->get('especialidades'));   
        $asignacione->periodos()->sync($request->get('periodos'));   
        $asignacione->secciones()->sync($request->get('secciones'));   
        $asignacione->paralelos()->sync($request->get('paralelos'));   
        return redirect()->route('asignaciones.index', $asignacione)->with('status', 'Agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignacione  $asignacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignacione $asignacione)
    {
        $periodacademicos = Periodacademico::all();
        $especialidades = Especialidade::all();
        $periodos = Periodo::all();
        $secciones = Seccione::all();
        $paralelos = Paralelo::all();
        return view('asignaciones.edit', compact('asignacione', 'periodacademicos', 'especialidades', 'periodos', 'secciones', 'paralelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignacione  $asignacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacione $asignacione)
    {
        $data= $request->validate([
            'periodacademicos' => ['required'],
            'especialidades' => ['required'],
            'periodos' => ['required'],
            'secciones' => ['required'],
            'paralelos' => ['required'],
        ]);

        $asignacione->update($data);     
        return redirect()->route('asignaciones.index', $asignacione)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignacione  $asignacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacione $asignacione)
    {
        $asignacione->delete();
        return redirect()->route('asignaciones.index', $asignacione)->with('status', 'Eliminado con éxito');
    }
}
