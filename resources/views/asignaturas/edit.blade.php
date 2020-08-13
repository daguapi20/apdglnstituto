@extends('layouts.layout')
@section('title', ' Asignatura |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">        
        <div class="row  justify-content-center ">
            <div class="col-lg-7">
                <div class="card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-book-open  mr-4"></i> Asignatura</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST"  action="{{ route('asignaturas.update', $asignatura)}} ">
                            @csrf @method('PUT')

                            <div class="form-group">
                                <label for="especialidade_id" class="col-form-label font-weight-bold">Especialidad
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-check"></i></span></div>
                                    <select name="especialidade_id"  class="form-control @error('especialidade_id') is-invalid @enderror ">
                                        <option  class="form-control" value="">Seleccionar</option>
                                        @foreach ($especialidades as $especialidade)
                                            <option value="{{$especialidade->id}}"
                                             {{old('especialidade_id', $asignatura->especialidade_id) == $especialidade->id ? 'selected' : ''}}  
                                            >{{$especialidade->nombre}}</option>  
                                        @endforeach
                                    </select>
                                    @error ('especialidade_id') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="periodo_id" class="col-form-label font-weight-bold">Periodo
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-check"></i></span></div>
                                    <select name="periodo_id"  class="form-control @error('periodo_id') is-invalid @enderror ">
                                        <option  class="form-control" value="">Seleccionar</option>
                                            @foreach ($periodos as $periodo)
                                                 <option value="{{$periodo->id}}"
                                                    {{old('periodo_id', $asignatura->periodo_id) == $periodo->id ? 'selected' : ''}} 
                                                 >{{$periodo->nombre}}</option>  
                                            @endforeach
                                    </select>
                                    @error ('periodo_id') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="cod_asignatura" class="col-form-label font-weight-bold">Código
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-code"></i></span></div>
                                    <input type="text" class="form-control @error('cod_asignatura') is-invalid @enderror" 
                                        name="cod_asignatura" value="{{old('cod_asignatura', $asignatura->cod_asignatura)}}" placeholder="Código">
                                    @error ('cod_asignatura') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="nombre" class="col-form-label font-weight-bold">Nombre 
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-file"></i></span></div>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                        name="nombre" value="{{old('nombre', $asignatura->nombre)}}" placeholder="Asignatura">
                                    @error ('nombre') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="hora" class="col-form-label font-weight-bold">Hora 
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-clock"></i></span></div>
                                    <input type="text" class="form-control @error('hora') is-invalid @enderror" 
                                        name="hora" value="{{old('hora', $asignatura->hora)}}" placeholder="50">
                                    @error ('hora') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-actions mt-4">
                                <button class=" col-4 btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div> 
</main>  
@endsection