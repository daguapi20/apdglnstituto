<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Tipodocumento;
use App\Models\Estadocivile;
use App\Models\Ocupacione;
use App\Models\Provincia;
use App\Models\Cantone;
use App\Models\Etnia;
use App\Models\Tiposangre;
use App\Models\Instruccione;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('search'));
        $estudiantes = Estudiante::
            where('estudiantes.dni','LIKE','%'.$query.'%')
            ->orWhere('estudiantes.email','LIKE','%'.$query.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodocumentos = Tipodocumento::all();
        $estadociviles = Estadocivile::all();
        $ocupaciones = Ocupacione::all();
        $provincias = Provincia::all();
        $cantones = Cantone::all();
        $etnias = Etnia::all();
        $tiposangres = Tiposangre::all();
        $instrucciones = Instruccione::all();
        return view('estudiantes.create', compact('tipodocumentos','estadociviles', 'ocupaciones', 'provincias', 'cantones', 'etnias', 'tiposangres', 'instrucciones'));
        
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
            'tipodocumento_id' => ['required'],
            'dni' => ['required', 'digits:10', 'unique:estudiantes'],
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u',  'min:3', 'max:30'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u',  'min:3', 'max:30'],
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estadocivile_id' => ['required'],
            'fecha_nacimiento' => ['required', 'date'],
            'nacionalidad' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:5', 'max:30'],
            'ocupacione_id' => ['required'],
            'discapacidad' => ['required', 'boolean:1,0'],
            'tipo_discapacidad' => ['nullable', 'regex:/^[\pL\s\-]+$/u', 'min:5' , 'max:30'],
            'porcentaje' => ['nullable', 'digits_between:1,3' ],
            'provincia_id' => ['required'],
            'cantone_id' => ['required'],
            'etnia_id' => ['required'],
            'email' => ['required', 'email',  'max:64', 'unique:estudiantes'],
            'tiposangre_id' => ['required'],
            'miembro_hogar' => ['required', 'digits_between:1,2'],
            'ingreso_ec' => ['required', 'digits_between:2,4'],
            'direccion_provincia_id' => ['required'],
            'direccion_cantone_id' => ['required'],
            'calle' => ['required', 'string' , 'max:255'],
            'telefono_fijo' => [ 'nullable','digits_between:7,10'],
            'telefono_movil' => ['required', 'digits:10'],
            'telefono_parentesco' => ['required', 'digits:10'],
            'parentesco' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:3', 'max:15'], 
            'institucion_origen' => ['required', 'string', 'min:10', 'max:75'],
            'titulo_bachillerato' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:6', 'max:30'],
            'nombre_padre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:3','max:40'],
            'padre_ocupacione_id' => ['required'],
            'instruccione_id' => ['required'],
            'nombre_madre' => ['required', 'regex:/^[\pL\s\-]+$/u',  'min:3', 'max:40'],
            'madre_ocupacione_id' => ['required'],
            'madre_instruccione_id' => ['required'],
        ]);

        $estudiante = Estudiante::create($data);      
        return redirect()->route('estudiantes.index', $estudiante)->with('status', 'Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        $tipodocumentos = Tipodocumento::all();
        $estadociviles = Estadocivile::all();
        $ocupaciones = Ocupacione::all();
        $provincias = Provincia::all();
        $cantones = Cantone::all();
        $etnias = Etnia::all();
        $tiposangres = Tiposangre::all();
        $instrucciones = Instruccione::all();
        return view('estudiantes.edit', compact('estudiante','tipodocumentos','estadociviles', 'ocupaciones', 'provincias', 'cantones', 'etnias', 'tiposangres', 'instrucciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $data= $request->validate([
            'tipodocumento_id' => ['required'],
            'dni' => 'required|digits:10|unique:estudiantes,dni,' .$estudiante->id,
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:3', 'max:30'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'min:3', 'max:60'],
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estadocivile_id' => ['required'],
            'fecha_nacimiento' => ['required', 'date'],
            'nacionalidad' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string' , 'min:5', 'max:30'],
            'ocupacione_id' => ['required'],
            'discapacidad' => ['required', 'boolean:1,0'],
            'tipo_discapacidad' => ['nullable', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:5' , 'max:30'],
            'porcentaje' => ['nullable', 'digits_between:1,3'],
            'provincia_id' => ['required'],
            'cantone_id' => ['required'],
            'etnia_id' => ['required'],
            'email' => 'required|email|unique:estudiantes,email,' .$estudiante->id,
            'tiposangre_id' => ['required'],
            'miembro_hogar' => ['required', 'digits_between:1,2'],
            'ingreso_ec' => ['required', 'digits_between:2,4'],
            'direccion_provincia_id' => ['required'],
            'direccion_cantone_id' => ['required'],
            'calle' => ['required', 'string' , 'max:255'],
            'telefono_fijo' => [ 'nullable', 'digits_between:7,10'],
            'telefono_movil' => ['required', 'digits:10'],
            'telefono_parentesco' => ['required', 'digits:10'],
            'parentesco' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:3', 'max:20'],
            'institucion_origen' => ['required', 'string', 'min:10', 'max:75'],
            'titulo_bachillerato' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:6', 'max:60'],
            'nombre_padre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'min:3', 'max:40'],
            'padre_ocupacione_id' => ['required'],
            'instruccione_id' => ['required'],
            'nombre_madre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string',  'min:3', 'max:40'],
            'madre_ocupacione_id' => ['required'],
            'madre_instruccione_id' => ['required'],
        ]);

        $estudiante->update($data);      
        return redirect()->route('estudiantes.index', $estudiante)->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
