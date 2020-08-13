@extends('layouts.layout')
@section('title', ' Notas |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-pencil-ruler mr-3"></i>Notas </h4>
                <a class="btn btn-primary" href="{{route('notes.store')}}"><i class="fas fa-plus-circle mr-1"></i>Agregar</a>     
                </div>
                <div class="card-body">
                    <form class=" form-inline justify-content-end">
                    <div class="form-group  row">
                        <label for="duration" class="col-md-2 mt-2 col-form-label font-weight-bold text-md-right">Periodo Académico
                            <span class="text-primary">*</span></label>
                        <div class="col-md-4 mt-2">
                            <select name="academic_id" class="form-control  ">
                                <option  class="form-control ">Periodo Académico</option>
                                @foreach ($academics as $academic)
                                <option  
                                    @if ($academic->id==$query_academic)
                                        selected
                                    @endif
                                    value="{{$academic->id}}">{{$academic->academic_period}}
                                </option> 
                                @endforeach
                            </select>                         
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="specialt_id" class="col-md-2 mt-2 col-form-label font-weight-bold text-md-right">Especialidad
                            <span class="text-primary">*</span></label>
                        <div class="col-md-4 mt-2">
                            <select name="specialt_id"  class="form-control  ">
                                <option  class="form-control ">Especialidad</option>
                                @foreach ($specialts as $specialt)
                                <option  
                                    @if ($specialt->id==$query_specialt)
                                        selected
                                    @endif
                                    value="{{$specialt->id}}">{{$specialt->name}}
                                </option> 
                                @endforeach
                            </select>                       
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="semester_id" class="col-md-2 mt-2 col-form-label font-weight-bold text-md-right">Semestre
                            <span class="text-primary">*</span></label>
                        <div class="col-md-4 mt-2">
                            <select name="semester_id"  class="form-control  ">
                                <option value="semester_id" class="form-control ">Semestre</option>
                                @foreach ($semesters as $semester)
                                <option  
                                    @if ($semester->id==$query_semester)
                                        selected
                                    @endif
                                    value="{{$semester->id}}">{{$semester->name}}
                                </option> 
                                @endforeach
                            </select>                     
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label for="subject_id" class="col-md-2 mt-2 col-form-label font-weight-bold text-md-right">Asignatura
                            <span class="text-primary">*</span></label>
                        <div class="col-md-4 mt-2">
                            <select name="subject_id"  class="form-control  ">
                                <option value="subject_id" class="form-control ">Asignatura</option>
                                @foreach ($subjects as $subject)
                                <option  
                                    @if ($subject->id==$query_subject)
                                        selected
                                    @endif
                                    value="{{$subject->id}}">{{$subject->name}}
                                </option> 
                                @endforeach
                            </select>                        
                        </div>
                    </div> --}}

                    {{-- <div class="form-group row">
                        <label for="shift_id" class="col-md-2 mt-2 col-form-label font-weight-bold text-md-right">Seccion
                            <span class="text-primary">*</span></label>
                        <div class="col-md-4 mt-2">
                            <select name="shift_id"  class="form-control  ">
                                <option  class="form-control ">Seccion</option>
                                @foreach ($shifts as $shift)
                                <option  
                                    @if ($shift->id==$query_shift)
                                        selected
                                    @endif
                                    value="{{$shift->id}}">{{$shift->name}}
                                </option> 
                                @endforeach
                            </select>                         
                        </div>
                    </div> --}}
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
                <!-- /.row--><br>

                    <form action="{{route('notes.store')}}" method="post">
                        @csrf                 
                    
                    <table class="table table-responsive-sm table-striped table-hover table-bordered mb-0">
                    <thead class="bg-primary">
                        <tr>
                        <th class="text-center">Nro</th>
                        <th class="text-center">NOMBRE DEL ALUMNO</th>
                        <th class="text-center">Docencia</th>
                        <th class="text-center">Experimento Aplicación</th>
                        <th class="text-center">Trabajo Autonómo</th>
                        <th class="text-center">SUMA</th>
                        <th class="text-center">PROMEDIO EN DECIMALES</th>
                        <th class="text-center">EXAMEN PRINCIPAL</th>
                        <th class="text-center">PROMEDIO FINAL(Entero)</th>
                        <th class="text-center">PROMEDIO EN LETRAS</th>
                        <th class="text-center">Observación</th>
                        <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            {{-- <td >{{$student->item}} </td> --}}
                        <th ><input type="hidden" name="student[]" value="{{$student->student_id}}"> </th>
                        <td >{{$student->name}} </td>
                        <th class="text-center"><input type="number" value="0" name="teaching[]" id="teaching{{$student->id}}" class="form-control" onchange="calcular({{$student->id}});"  min="0" max="10"></th>
                        <th > <input type="number" value="0" name="application_experiment[]" id="application_experiment{{$student->id}}" class="form-control" onchange="calcular({{$student->id}});" ></th>
                        <th > <input type="number" value="0" name="autonomous_work[]" id="autonomous_work{{$student->id}}" class="form-control" onchange="calcular({{$student->id}});" > </th>
                        <th > <input type="number" id="sum{{$student->id}}" name="sum[]"> </th>
                        <th > <input type="number" id="decimal_average{{$student->id}}" name="decimal_average[]"></th>
                        <th > <input type="number" value="0" name="main_exam[]" id="main_exam{{$student->id}}" class="form-control" onchange="calcular({{$student->id}});" ></th>
                        <th > <input type="number" id="final_average{{$student->id}}" name="final_average[]"></th>
                        <th >  <input type="text" id="letter_average{{$student->id}}" name="letter_average[]"></th>
                        <th > <input type="text" id="observation{{$student->id}}" name="observation[]"></th>
                        <th > </th>
                        <th ><input type="hidden" name="subject[]" value="{{$student->subject_id}}"> </th>
                       
                       
                        {{-- <td class="text-center">
                            <div class="row px-4">
                                <a class=" btn   btn-dark mr-3 mt-2 cil-low-vision" href="#"></a> 
                                <a class=" btn   btn-info mr-3 mt-2 cil-pencil" href="{{route('notes.edit', $note)}}"></a>

                                    <form class="mr-2 mt-2 " method="POST"
                                        action="{{route('notes.destroy', $note )}}">
                                        @csrf @method('DELETE')
                                        
                                        <button class=" btn btn-danger cil-trash"
                                            onclick="return confirm('Estás seguro de que deseas eliminar esta función?')">
                                        </button>
                                    </form> 
                            </div> 
                        </td> --}}
                        </tr>                      
                    @endforeach
                    </tbody>
                    </table>

                    <button class=" btn btn-primary cil-circle">
                        guardar 
                    </button>
                </form> 

                </div>
                </div>
            </div>
        </div>    
    </div>    
</div> 
</main>  
@push('scripts') 
<script>
// calcula el promedio de notas
function calcular($id){
    
  teaching=document.getElementById('teaching'+$id).value;
  application_experiment=document.getElementById('application_experiment'+$id).value;
  autonomous_work=document.getElementById('autonomous_work'+$id).value;
  main_exam=document.getElementById('main_exam'+$id).value;
  //sum=document.getElementById('sum').value;
  var total=parseFloat(teaching)+parseFloat(application_experiment)+parseFloat(autonomous_work);
  document.getElementById("sum"+$id).value = total;
  
  promedio=parseFloat(total).toFixed(2) / 3;
  promedio=parseFloat(promedio).toFixed(2)
  document.getElementById("decimal_average"+$id).value = promedio;


  final_average=(Number(promedio)+Number(main_exam))/2;
  final_average=parseFloat(final_average).toFixed(0);
  if (total>0){
    document.getElementById("final_average"+$id).value = final_average;
  }
 document.getElementById("letter_average"+$id).value = letters(final_average);
  //if (total<7){
  //  document.getElementById('notesuspend').disabled=false;
  //}else{
   // document.getElementById('notesuspend').disabled=true;  
  //}
  if (final_average<7){
    document.getElementById("observation"+$id).value='DESAPROBADO';
  }else{
   document.getElementById("observation"+$id).value="APROBADO";
  }
  
}
function letters($i){
    $dato='XXX';
    switch ($i) {
    case '0':
        $dato="CERO";
        break;
    case '1':
        $dato="UNO";
        break;
    case '2':
        $dato="DOS";
        break;
    case '3':
        $dato="TRES";
        break;
    case '4':
        $dato="CUATRO";
        break;
    case '5':
        $dato="CINCO";
        break;
    case '6':
        $dato="SEIS";
        break;
    case '7':
        $dato="SIETE";
        break;
    case '8':
        $dato="OCHO";
        break;
    case '9':
        $dato="NUEVE";
        break;
    case '10':
        $dato="DIEZ";
        break;
    }

    return($dato);
}
</script>
@endpush	
@endsection