@extends('layouts.layout')
@section('title', ' Matrículas |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary "> 
                <div class="card-header">
                    <div class="row">
                        <div class="container col-md-12">
                            <div class="row">
                                <div class="form-group justify-content-right col-md-2">
                                        <img class="c-sidebar-brand-full"  width="118" height="110" src="{{asset('assets/brand/logo3.png')}}" alt="ITSGA Logo">
                                </div>

                                <div class="form-group align-self-center   col-md-8">
                                    <h1 class="text-center font-weight-bold ">INSTITUTO SUPERIOR TECNOLÓGICO "SAN GABRIEL" </h1>        
                                    <h4 class="text-center font-weight-bold ">Registro Institucional 224 SENESCYT</h4>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                   <div class="row">
                       <div class="container col-md-12">
                           <div class="row">
                               <div class="form-group  col-sm-12">
                                   <h2 class="text-center font-weight-bold">MATRÍCULA {{$matricula->id}}</h2>
                                   <h4 class="text-center font-weight-bold">Periodo Académico</h4> 
                                   <div class="text-center">{{$matricula->asignacione->periodacademicos->pluck('periodo')->implode(', ')}}</div>
                               </div>
                               
                               <div class="form-group row col-sm-4">
                                    <label for="nombre" class="col-md-5  col-form-label font-weight-bold">Nombres y Apellidos </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->nombre}} {{$matricula->estudiante->apellido}}                      
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Cédula o Pasaporte </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->dni}}                              
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Estado Civil </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->estadocivile->estado_civil}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Fecha de Nacimiento </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->fecha_nacimiento}}                              
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Nacionalidad </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->nacionalidad}}                              
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Ocupación </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->ocupacione->ocupacion}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Lugar de Nacimiento </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->provincia->provincia}}, {{$matricula->estudiante->cantone->canton}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Etnia </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->etnia->etnia}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Email </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->email}}                              
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Tipo de Sangre </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->tiposangre->tipo}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Miembros del Hogar </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->miembro_hogar}}                              
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Ingreso Económico </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->ingreso_ec}}                              
                                    </div>
                                </div>
                              
                                <div class="form-group  col-sm-12">
                                    <hr>
                                    <label for="name" class="col-md-12 text-primary  col-form-label font-weight-bold ">DIRECCIÓN</label>
                                    <div class="col-md-7 mt-2">                           
                                    </div>
                                </div>

                                <div class="form-group row col-sm-8">
                                    <label for="name" class="col-md-3  col-form-label font-weight-bold ">Dirección </label>
                                    <div class="col-md-9 mt-2">
                                        {{$matricula->estudiante->provincia2->provincia}}, {{$matricula->estudiante->cantone2->canton}} ({{$matricula->estudiante->calle}})                               
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Teléfonos </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->telefono_fijo}} /  {{$matricula->estudiante->telefono_movil}}                             
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-4  col-form-label font-weight-bold ">Institución de donde proviene </label>
                                    <div class="col-md-8 mt-2">
                                        {{$matricula->estudiante->institucion_origen}}                            
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-4  col-form-label font-weight-bold ">Título de Bachillerato </label>
                                    <div class="col-md-8 mt-2">
                                        {{$matricula->estudiante->titulo_bachillerato}}                            
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Nombre del padre </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->nombre_padre}}                            
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Ocupación </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->ocupacione2->ocupacion}} 
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Instrucción </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->instruccione->instruccion}} 
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Nombre la madre </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->nombre_madre}}                            
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Ocupación </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->ocupacione3->ocupacion}} 
                                    </div>
                                </div>

                                <div class="form-group row col-sm-4">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Instrucción </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->estudiante->instruccione2->instruccion}} 
                                    </div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <hr>
                                    <label for="name" class="col-md-12 text-primary  col-form-label font-weight-bold ">DETALLE MATRÍCULA</label>
                                    <div class="col-md-7 mt-2">                           
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Carrera </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->asignacione->especialidades->pluck('nombre')->implode(', ')}}
                                    </div>
                                </div>

                                <div class="form-group  row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Periodo </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->asignacione->periodos->pluck('nombre')->implode(', ')}}                           
                                    </div>
                                </div>

                                <div class="form-group  row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Sección </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->asignacione->secciones->pluck('nombre')->implode(', ')}}                           
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Paralelo </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->asignacione->paralelos->pluck('paralelo')->implode(', ')}}
                                    </div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <hr>
                                    <label for="name" class="col-md-12 text-primary  col-form-label font-weight-bold ">ASIGNATURAS MATRICULADAS </label>
                                    <div class="col-md-7 mt-2">                           
                                    </div>
                                </div>

                                <div class="form-group row col-sm-12">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Asignaturas </label>
                                    <div class="col-md-7 mt-2">
                                        {{$matricula->asignaturas->pluck('nombre')->implode(' - ')}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Alumno </label>
                                    <div class="col-md-7 mt-2">
                                        {{-- {{$matricula->estudiante->nombre_padre}}                             --}}
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="name" class="col-md-5  col-form-label font-weight-bold ">Secretaria </label>
                                    <div class="col-md-7 mt-2">
                                        {{-- {{$matricula->estudiante->nombre_padre}}                             --}}
                                    </div>
                                </div>
                                
                           </div>
                       </div>
                   </div>
                </div>
                
                </div>
            </div>
        </div>    
    </div>    
</div> 
</main>   
@endsection