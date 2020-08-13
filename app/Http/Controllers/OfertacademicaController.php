<?php

namespace App\Http\Controllers;

use App\Models\Ofertacademica;
use Illuminate\Http\Request;

class OfertacademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertacademicas = Ofertacademica::all();
        return view('ofertacademicas.index', compact('ofertacademicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ofertacademicas.create');
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
            'nombre' => ['required', 'unique:ofertacademicas', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:5', 'max:30'],
            'duracion' => ['required', 'string', 'min:5', 'max:30'],
        ]);

        $ofertacademica = Ofertacademica::create($data);      
        return redirect()->route('ofertacademicas.index', $ofertacademica)->with('status', 'Agregado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ofertacademica  $ofertacademica
     * @return \Illuminate\Http\Response
     */
    public function edit(Ofertacademica $ofertacademica)
    {
        return view('ofertacademicas.edit', compact('ofertacademica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ofertacademica  $ofertacademica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofertacademica $ofertacademica)
    {
        $data= $request->validate([

            'nombre' => 'required|between:5,30|regex:/^[\pL\s\-]+$/u|unique:ofertacademicas,nombre,' . $ofertacademica->id, 
            'duracion' => ['required', 'string', 'between:5,30'],
        ]);

        $ofertacademica->update($data);
        return redirect()->route('ofertacademicas.index', $ofertacademica)->with('status', 'Actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ofertacademica  $ofertacademica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ofertacademica $ofertacademica)
    {
        $ofertacademica->delete();
        return redirect()->route('ofertacademicas.index', $ofertacademica)->with('status', 'Eliminado con éxito');
    }
}
