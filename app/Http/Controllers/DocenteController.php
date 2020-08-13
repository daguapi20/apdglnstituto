<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Provincia;
use App\Models\Cantone;
use App\Models\Estadocente;
use App\Models\Tipocontrato;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      /* return view('docentes.index', [
           'docentes'=>Docente::latest()->paginate()
       ]);*/
       
     $query=trim($request->get('search'));
        $docentes = Docente::
            where('docentes.dni','LIKE','%'.$query.'%')
            ->orWhere('docentes.email','LIKE','%'.$query.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Provincia::all();
        $cantones = Cantone::all();
        $estadocentes = Estadocente::all();
        $tipocontratos = Tipocontrato::all();
        return view('docentes.create', compact('provincias', 'cantones', 'estadocentes', 'tipocontratos'));
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
            'dni' => ['required', 'digits:10', 'unique:docentes'],
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:3', 'max:30'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'min:3', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:docentes'],
            'titulo_academico' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'min:5', 'max:60'],
            'fecha_ingreso' => ['required', 'date', ],
            'telefono_fijo' => [ 'nullable','digits_between:7,10'],
            'telefono_movil' => ['required', 'digits:10'],
            'provincia_id' => ['required'],
            'cantone_id' => ['required'],
            'calle' => ['required', 'string', 'max:255'],
            'estadocente_id' =>  ['required'],
            'tipocontrato_id' =>  ['required'],
        ]);
        
        //validacion select
        $provincia_id=$request->get('provincia_id');
        $cantone_id=$request->get('cantone_id');
        if(Cantone::where('provincia_id', $provincia_id)->where('cantones.id', $cantone_id)->exists()){
          $docente = Docente::create($data);      
          return redirect()->route('docentes.index', $docente)->with('status', 'Agregado con éxito');
        }else{
            abort(403, 'Ingreso datos incorrecto');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        $provincias = Provincia::all();
        $cantones = Cantone::all();
        $estadocentes = Estadocente::all();
        $tipocontratos = Tipocontrato::all();
        return view('docentes.edit', compact('docente', 'provincias', 'cantones', 'estadocentes', 'tipocontratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        $data= $request->validate([
            'dni' => 'required|digits:10|unique:docentes,dni,' .$docente->id,
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:3', 'max:30'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'min:3', 'max:30'],
            'email' => 'required|email|string|unique:docentes,email,' .$docente->id,
            'titulo_academico' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'min:5', 'max:60'],
            'fecha_ingreso' => ['required', 'date'],
            'telefono_fijo' => [ 'nullable','digits_between:7,10'],
            'telefono_movil' => ['required', 'digits:10'],
            'provincia_id' => ['required'],
            'cantone_id' => ['required'],
            'calle' => ['required', 'string', 'max:255'],
            'estadocente_id' => ['required'],
            'tipocontrato_id' => ['required'],
        ]);

        $docente->update($data);      
        return redirect()->route('docentes.index', $docente)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index', $docente)->with('status', 'Eliminado con éxito');
    }
}
