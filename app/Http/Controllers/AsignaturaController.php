<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Especialidade;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('search'));
        $asignaturas = Asignatura::
            where('asignaturas.nombre','LIKE','%'.$query.'%')
            ->orWhere('asignaturas.cod_asignatura','LIKE','%'.$query.'%')
            ->paginate(15);
        return view('asignaturas.index', compact('asignaturas'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidade::all();
        $periodos = Periodo::all();
        return view('asignaturas.create', compact('especialidades', 'periodos'));
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
            'especialidade_id' => ['required'],
            'periodo_id' => ['required'],
            'cod_asignatura' => ['required', 'unique:asignaturas',  'min:5', 'max:8'],
            'nombre' => ['required',  'regex:/^[\pL\s\-]+$/u', 'min:7', 'max:50'],
            'hora' => ['required', 'digits_between:2,3'],
        ]);

        $asignatura = Asignatura::create($data);      
        return redirect()->route('asignaturas.index', $asignatura)->with('status', 'Agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        $especialidades = Especialidade::all();
        $periodos = Periodo::all();
        return view('asignaturas.edit', compact('asignatura', 'especialidades', 'periodos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        $data= $request->validate([
            'especialidade_id' => ['required'],
            'periodo_id' => ['required'],
            'cod_asignatura' => 'required|min:5|max:8|unique:asignaturas,cod_asignatura,' . $asignatura->id,
            'nombre' => ['required',  'regex:/^[\pL\s\-]+$/u', 'min:7', 'max:50'],
            'hora' => ['required', 'digits_between:2,3'],
        ]);

        $asignatura->update($data);      
        return redirect()->route('asignaturas.index', $asignatura)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.index', $asignatura)->with('status', 'Eliminado con éxito');
    }
}
