<?php

namespace App\Http\Controllers;

use App\Models\Periodacademico;
use App\Models\Especialidade;
use App\Models\Especialidade_periodacademico;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeriodacademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodacademicos = Periodacademico::with('especialidades')->get();
        return view('periodacademicos.index', compact('periodacademicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidade::all();
        $periodacademicos = Periodacademico::all();
        return view('periodacademicos.create', compact('periodacademicos', 'especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todayDate = now();
        $data= $request->validate([
           'periodo' => ['required', 'unique:periodacademicos', 'string', 'min:10', 'max:50' ], 
            'condicion' => ['required','boolean:1,0'],
            'fecha_inicio' => 'required|date|after_or_equal:'.$todayDate,
            'fecha_final' => ['required', 'date','after:fecha_inicio'],
            'especialidades'=>['required'],
        ]);
        $periodacademico = Periodacademico::create($data);
        //Asignar Especialidades 
        $periodacademico->especialidades()->sync($request->get('especialidades'));
            

        return redirect()->route('periodacademicos.index', $periodacademico)->with('status', 'Agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodacademico  $periodacademico
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodacademico $periodacademico)
    {
        $especialidades = Especialidade::all();
        return view('periodacademicos.edit', compact('periodacademico', 'especialidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodacademico  $periodacademico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodacademico $periodacademico)
    {
        $data= $request->validate([

            'periodo' => 'required|min:10|max:50|unique:periodacademicos,periodo,' . $periodacademico->id,
            'condicion' => ['required', 'boolean:1,0'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_final' => ['required', 'date', 'after:fecha_inicio'],
            'especialidades'=>['required'],
        ]);

        $periodacademico->update($data);
        $periodacademico->especialidades()->sync($request->get('especialidades'));
        return redirect()->route('periodacademicos.index', $periodacademico)->with('status', 'Actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodacademico  $periodacademico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodacademico $periodacademico)
    {
        $periodacademico->delete();
        return redirect()->route('periodacademicos.index', $periodacademico)->with('status', 'Eliminado con éxito');
    }
}
