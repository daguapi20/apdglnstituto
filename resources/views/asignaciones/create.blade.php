@extends('layouts.layout')
@section('title', ' Especialidad |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class="col-sm-6">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-clone mr-4"></i>Asignación</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <form method="POST"  action="{{ route('asignaciones.store')}} ">
                              @csrf 
                          <div class="container col-sm-12">
                              <div class="row">
                                
                                <div class="form-group col-md-6">
                                    <label for="periodacademicos" class="col-md-12 mt-2 col-form-label font-weight-bold">Periodo Académico
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="periodacademicos" id="periodacademicos" class="form-control @error('periodacademicos') is-invalid @enderror"  onchange="cambia_especialidades(this)">
                                            <option value="" class="form-control ">Seleccione un periodo</option>
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
                                        <select name="especialidades" id="especialidade_id" class="form-control @error('especialidades') is-invalid @enderror  ">
                                            <option value="" class="form-control ">Seleccione una Especialidad</option>
                                            @foreach ($especialidades as $especialidade)
                                                <option  value="{{$especialidade->id}}"
                                                    {{old('especialidades')==$especialidade->id ? 'selected' : '' }}
                                                    >{{$especialidade->nombre}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('especialidades') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror  
                                                                
                                    </div>
                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="periodo" class="col-md-12 mt-2 col-form-label font-weight-bold">Asignar Periodos
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <select  name="periodos[]"  class="form-control @error('periodos') is-invalid @enderror  " multiple >
                                            @foreach ($periodos as $periodo)
                                                <option {{ collect(old('periodos'))->contains($periodo->id) ? 'selected' :  ''}}
                                                value="{{$periodo->id}}">{{$periodo->nombre}}</option>    
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Presione Ctrl para selecionar</small>
                                        @error ('periodos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                    </div>
                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="seccione" class="col-md-12 mt-2 col-form-label font-weight-bold">Secciones
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <select  name="secciones"  class="form-control @error('secciones') is-invalid @enderror">
                                            <option value="" class="form-control ">Seleccione Sección</option>
                                            @foreach ($secciones as $seccione)
                                                <option  value="{{$seccione->id}}"
                                                    {{old('secciones')==$seccione->id ? 'selected' : '' }}
                                                    >{{$seccione->nombre}}</option>  
                                            @endforeach
                                        </select>
                                        @error ('secciones') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                    </div>
                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="paralelo" class="col-md-12 mt-2 col-form-label font-weight-bold">Paralelos
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <select  name="paralelos"  class="form-control @error('paralelos') is-invalid @enderror">
                                            <option value="" class="form-control ">Seleccione Paralelo</option>
                                            @foreach ($paralelos as $paralelo)
                                            <option  value="{{$paralelo->id}}"
                                                {{old('paralelos')==$paralelo->id ? 'selected' : '' }}
                                                >{{$paralelo->paralelo}}</option> 
                                            @endforeach
                                        </select>
                                        @error ('paralelos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-12">                                                             
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-0">
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Registrar
                                        </button>
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
    </div>    
</div> 
</main> 
<script>
    //Inicializa por primera vez
    cambia_especialidades('');
function cambia_especialidades(select){ 
    const especialidades = @json($especialidades);
    console.log(especialidades);

    periodacademico = document.getElementById('periodacademicos').value;
    console.log(periodacademico);


    const result = especialidades.filter(especialidades => especialidades.periodacademico_id === Number(periodacademico));
    console.log(result);
    

    if (periodacademico != 0) { 

        num_especialidades = result.length;

        document.getElementById("especialidade_id").length = num_especialidades;
        console.log(num_especialidades);
        for(i=0;i<num_especialidades;i++){ 
            especialidade_id.options[i].value=result[i].especialidade_id;
            especialidade_id.options[i].text=result[i].nombre;
            
        }   
    }else{ 

        document.getElementById("especialidade_id").length  = 1;
 
        especialidade_id.options[0].value = "Asignar una Especialidad"; 
        especialidade_id.options[0].text = "Asignar una Especialidad"; 
    } 

    especialidade_id.options[0].selected = true; 
}

</script>


@endsection