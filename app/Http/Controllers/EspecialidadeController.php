<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Ofertacademica;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidade::all();
        return view('especialidades.index', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ofertacademicas = Ofertacademica::all();
        return view('especialidades.create', compact('ofertacademicas'));
        
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
            'ofertacademica_id' => ['required'],
            'nombre' => ['required', 'unique:especialidades', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:6', 'max:60'],
        ]);

        $especialidade = Especialidade::create($data);      
        return redirect()->route('especialidades.index', $especialidade)->with('status', 'Agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidade $especialidade)
    {
        $ofertacademicas = Ofertacademica::all();
        return view('especialidades.edit', compact('especialidade', 'ofertacademicas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidade $especialidade)
    {
        $data= $request->validate([
            'ofertacademica_id' => ['required'],
            'nombre' => 'required|regex:/^[\pL\s\-]+$/u|string|min:6|max:60|unique:especialidades,nombre,' .$especialidade->id, 
        ]);

        $especialidade->update($data);      
        return redirect()->route('especialidades.index', $especialidade)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidade $especialidade)
    {
        $especialidade->delete();
        return redirect()->route('especialidades.index', $especialidade)->with('status', 'Eliminado con éxito');
    }
}
