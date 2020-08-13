@extends('layouts.layout')
@section('title', ' Matriculas |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="container col-sm-8">
                <div class="card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-book mr-4"></i> Matrícula</h4>
                    </div>
                  <div class="card-body">
                        <form method="POST"  action="{{ route('matriculas.store')}} ">
                              @csrf 
                          <div class=" col-md-12">
                              <div class="row">

                                <div class="form-group col-sm-6 ">
                                    <label for="periodacademicos" class="col-md-12 mt-2 col-form-label font-weight-bold">Periodo Académico
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="periodacademicos" id="periodacademicos" class="form-control @error('periodacademicos') is-invalid @enderror"  onchange="cambiar_especialidad(this)" >
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($periodacademicos as $periodacademico)
                                                <option  value="{{$periodacademico->id}}"
                                                    {{old('periodacademicos')==$periodacademico->id ? 'selected' : '' }}
                                                    >{{$periodacademico->periodo}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('periodacademicos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="especialidades" class="col-md-12 mt-2 col-form-label font-weight-bold">Especialidad
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="especialidades" id="especialidade_id" class="form-control @error('especialidades') is-invalid @enderror " onchange="cambiar_periodo(this)">
                                            <option class="form-control" value="" >Sin datos</option>
                                            {{-- @foreach ($especialidades as $especialidade)
                                                <option  value="{{$especialidade->id}}"
                                                    {{old('especialidades')==$especialidade->id ? 'selected' : '' }}
                                                    >{{$especialidade->nombre}}</option>  
                                            @endforeach --}}
                                        </select> 
                                        @error ('especialidades') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror  
                                                                
                                    </div>
                                </div>


                                <div class="form-group col-sm-6 ">
                                    <label for="periodos" class="col-md-12 mt-2 col-form-label font-weight-bold">Periodo
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="periodos" id="periodo_id"  class="form-control @error('periodos') is-invalid @enderror ">
                                            <option class="form-control" value="">Sin datos</option>
                                            {{-- @foreach ($periodos as $periodo)
                                                <option  value="{{$periodo->id}}"
                                                    {{old('periodo_id')==$periodo->id ? 'selected' : '' }}
                                                    >{{$periodo->nombre}}</option>  
                                            @endforeach --}}
                                        </select> 
                                        @error ('periodos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 ">
                                    <label for="secciones" class="col-md-12 mt-2 col-form-label font-weight-bold">Sección
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="secciones"  class="form-control @error('secciones') is-invalid @enderror ">
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($secciones as $seccione)
                                                <option  value="{{$seccione->id}}"
                                                    {{old('seccione_id')==$seccione->id ? 'selected' : '' }}
                                                    >{{$seccione->nombre}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('secciones') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 ">
                                    <label for="paralelos" class="col-md-12 mt-2 col-form-label font-weight-bold">Paralelo
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="paralelos"  class="form-control @error('paralelos') is-invalid @enderror ">
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($paralelos as $paralelo)
                                                <option  value="{{$paralelo->id}}"
                                                    {{old('paralelo_id')==$paralelo->id ? 'selected' : '' }}
                                                    >{{$paralelo->paralelo}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('paralelos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                
                                <div class="form-group col-sm-6 ">
                                    <label for="estudiante_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Estudiante
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <select name="estudiante_id"  class="form-control @error('estudiante_id') is-invalid @enderror ">
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($estudiantes as $estudiante)
                                                <option  value="{{$estudiante->id}}"
                                                    {{old('estudiante_id')==$estudiante->id ? 'selected' : '' }}
                                                    >{{$estudiante->nombre}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('estudiante_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                         
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 ">
                                    <label for="tipomatricula_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Tipo de Matrícula
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="tipomatricula_id"  class="form-control @error('tipomatricula_id') is-invalid @enderror ">
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($tipomatriculas as $tipomatricula)
                                                <option  value="{{$tipomatricula->id}}"
                                                    {{old('tipomatricula_id')==$tipomatricula->id ? 'selected' : '' }}
                                                    >{{$tipomatricula->tipo}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('tipomatricula_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 ">
                                    <label for="asignatura_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Asignaturas
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="asignatura_id"  class="form-control @error('asignatura_id') is-invalid @enderror ">
                                            <option class="form-control" value="">Seleccionar</option>
                                            @foreach ($asignaturas as $asignatura)
                                                <option  value="{{$asignatura->id}}"
                                                    {{old('asignatura_id')==$asignatura->id ? 'selected' : '' }}
                                                    >{{$asignatura->nombre}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('asignatura_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-md-12 ">
                                    <div class="col-md-12">  
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6  mb-0">
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                             </div>
                            </div>
                        </form>
                  </div>
                </div>
            </div>
        </div>    
    </div>    
</div> 
</main>  
{{-- Archivos Scripts --}}

<script>
    
    //cambiar_especialidad('');
    function cambiar_especialidad(select){ 
       const especialidades = @json($especialidades);
       periodacademico = document.getElementById('periodacademicos').value;
       const result = especialidades.filter(especialidades => especialidades.periodacademico_id === Number(periodacademico));
       if(periodacademico==""){ // se coloca en blanco periodo academico
           document.getElementById("especialidade_id").length  = 1;
           especialidade_id.options[0].value = ""; 
           especialidade_id.options[0].text = "Sin datos"; 
           document.getElementById("periodo_id").length  = 1;
           periodo_id.options[0].value = ""; 
           periodo_id.options[0].text = "Sin datos";
           return;
       };
       if (periodacademico != 0) { 

           num_especialidades = result.length;

           document.getElementById("especialidade_id").length = num_especialidades+1;
           especialidade_id.options[0].value = ""; 
           especialidade_id.options[0].text = "Seleccionar"; 
           for(i=1;i<num_especialidades+1;i++){ 
               especialidade_id.options[i].value=result[i-1].especialidade_id;
               especialidade_id.options[i].text=result[i-1].nombre;
               
           }   
       }else{ 

           document.getElementById("especialidade_id").length  = 1;
           especialidade_id.options[0].value = ""; 
           especialidade_id.options[0].text = "Sin datos"; 
           document.getElementById("periodo_id").length  = 1;
           periodo_id.options[0].value = ""; 
           periodo_id.options[0].text = "Sin datos";
       } 
       especialidade_id.options[0].selected = true; 
       //cambiar_periodo();
   };

//Periodo
  function cambiar_periodo(select){ 
      const periodos = @json($asignaciones);
    
      especialidade_id = document.getElementById('especialidade_id').value;
       const result = periodos.filter(periodos => periodos.especialidade_id === Number(especialidade_id));
       if(especialidade_id==""){ // se coloca en blanco especialidad
           document.getElementById("periodo_id").length  = 1;
           periodo_id.options[0].value = ""; 
           periodo_id.options[0].text = "Sin datos"; 
           return;
       };
       if (especialidade_id != 0) { 

           num_periodos = result.length;

           document.getElementById("periodo_id").length = num_periodos+1;
           periodo_id.options[0].value = ""; 
           periodo_id.options[0].text = "Seleccionar"; 
           for(i=1;i<num_periodos+1;i++){ 
               periodo_id.options[i].value=result[i-1].periodo_id;
               periodo_id.options[i].text=result[i-1].nombre_periodo;
               
           }   
       }else{ 

           document.getElementById("periodo_id").length  = 1;
           periodo_id.options[0].value = ""; 
           periodo_id.options[0].text = "Sin datos"; 
       } 
       periodo_id.options[0].selected = true; 
   }

   
</script>
@endsection

