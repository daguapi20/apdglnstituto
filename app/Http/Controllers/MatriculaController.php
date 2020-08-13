<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Asignacione;
use App\Models\Periodacademico;
use App\Models\Especialidade;
use App\Models\Especialidade_periodacademico;
use App\Models\Asignacione_periodo;
use App\Models\Periodo;
use App\Models\Seccione;
use App\Models\Paralelo;
use App\Models\Asignatura;
use App\Models\Asignacione_paralelo;
use App\Models\Tipomatricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //CONSULTAR COMO REALIZAR CONUSLTA
     /* $matriculas = Matricula::with(['estudiante','asignacione', 'tipomatricula'])
         ->orderBy('id', 'desc')
         ->paginate(10);        
        return view('matriculas.index', compact('matriculas'));*/
        
       $query=trim($request->get('search'));
        $matriculas = Matricula::
            where('matriculas.id','LIKE','%'.$query.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        
        return view('matriculas.index', compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        $matriculas = Matricula::all();
        $periodacademicos = Periodacademico::all();
        $especialidades =Especialidade_periodacademico::
           join('especialidades','especialidades.id','=','Especialidade_periodacademico.especialidade_id')
           ->select('Especialidade_periodacademico.especialidade_id','especialidades.nombre','Especialidade_periodacademico.periodacademico_id')
           ->get();

        $periodos =Asignacione_periodo::
           join('periodos','periodos.id','=','Asignacione_periodo.periodo_id')
           ->select('Asignacione_periodo.periodo_id','periodos.nombre','Asignacione_periodo.asignacione_id')
           ->get();

        //$periodos = Periodo::all();
        $secciones = Seccione::all();
        $paralelos = Paralelo::all();
        $estudiantes = Estudiante::all();
        $tipomatriculas = Tipomatricula::all();
        $asignaturas = Asignatura::all();

        $asignaciones=Asignacione::
            join('asignacione_periodacademico','asignacione_periodacademico.asignacione_id','=','asignaciones.id')
            ->join('asignacione_especialidade','asignacione_especialidade.asignacione_id','=','asignaciones.id')
            ->join('asignacione_periodo','asignacione_periodo.asignacione_id','=','asignaciones.id')
            ->join('asignacione_seccione','asignacione_seccione.asignacione_id','=','asignaciones.id')
            ->join('asignacione_paralelo','asignacione_paralelo.asignacione_id','=','asignaciones.id')
            ->join('periodos','periodos.id','=','asignacione_periodo.periodo_id')
            ->select('asignaciones.id','asignacione_periodacademico.periodacademico_id','asignacione_especialidade.especialidade_id','asignacione_periodo.periodo_id',
            'asignacione_seccione.seccione_id','asignacione_paralelo.paralelo_id','periodos.nombre as nombre_periodo')
            ->get();
        //dd($asignaciones);
        
        
/*SELECT asignaciones.id,asignacione_periodacademico.periodacademico_id,asignacione_especialidade.especialidade_id,asignacione_periodo.periodo_id,
asignacione_seccione.seccione_id,asignacione_paralelo.paralelo_id
FROM asignaciones
join asignacione_periodacademico on asignacione_periodacademico.asignacione_id=asignaciones.id
join asignacione_especialidade on asignacione_especialidade.asignacione_id=asignaciones.id
join asignacione_periodo on asignacione_periodo.asignacione_id=asignaciones.id
join asignacione_seccione on asignacione_seccione.asignacione_id=asignaciones.id
join asignacione_paralelo on asignacione_paralelo.asignacione_id=asignaciones.id*/

        return view('matriculas.create', compact(
            'matriculas', 'periodacademicos', 'especialidades', 'periodos', 'secciones', 'paralelos', 'tipomatriculas', 'estudiantes', 'asignaturas', 'asignaciones'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        return view('matriculas.show', compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        //
    }
}
