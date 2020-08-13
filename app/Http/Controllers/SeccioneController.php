<?php

namespace App\Http\Controllers;

use App\Models\Seccione;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SeccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones = Seccione::all();
        return view('secciones.index', compact('secciones'));

       //return view('secciones.index');

       //DataTables::of(Seccione::query())->make(true);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secciones.create');
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
            'nombre' => ['required', 'unique:secciones', 'regex:/^[\pL\s\-]+$/u', 'string',  'min:3', 'max:30'],
        ]);
        $seccione = Seccione::create($data);      
        return redirect()->route('secciones.index', $seccione)->with('status', 'Agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seccione  $seccione
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccione $seccione)
    {
        return view('secciones.edit', compact('seccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seccione  $seccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seccione $seccione)
    {
        $data= $request->validate([
            'nombre' => 'required|regex:/^[\pL\s\-]+$/u|min:3|max:30|unique:secciones,nombre,' . $seccione->id,
         ]);
 
         $seccione->update($data);
         return redirect()->route('secciones.index', $seccione)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seccione  $seccione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccione $seccione)
    {
        $seccione->delete();
        return redirect()->route('secciones.index', $seccione)->with('status', 'Eliminado con éxito');
    }
}
