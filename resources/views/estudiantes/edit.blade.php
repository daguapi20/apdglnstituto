@extends('layouts.layout')
@section('title', ' Estudiante |')
@section('content')

<main class="c-main">
    
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            @if ($errors->any())
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">
                                {{$error}}
                        </li>
                    @endforeach

                </ul>
            @endif
              <div class="col-md-12">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user mr-4"></i> Editar  Estudiante</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <form method="POST"  action="{{ route('estudiantes.update', $estudiante)}} ">
                            @csrf @method('PUT')
                          
                              <div class="container col-sm-12">
                                    <div class="row ">
                                        <div class="form-group col-sm-12">
                                            <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                                <span class="text-primary">Datos personales</span></label>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="tipodocumento_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Tipo de documento
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="tipodocumento_id"  class="form-control @error('tipodocumento_id') is-invalid @enderror ">
                                                    <option class="form-control" value="">Seleccione documento</option>
                                                    @foreach ($tipodocumentos as $tipodocumento)
                                                        <option  value="{{$tipodocumento->id}}" 
                                                            {{old('tipodocumento_id', $estudiante->tipodocumento_id)==$tipodocumento->id ? 'selected' : '' }}
                                                            >{{$tipodocumento->tipo}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('tipodocumento_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror
                                                                         
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  col-sm-2 ">
                                            <label for="dni" class="col-sm-12 mt-2 col-form-label font-weight-bold ">Número Cédula 
                                                <span class="text-primary">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('dni') is-invalid @enderror"  
                                                name="dni" value="{{old('dni', $estudiante->dni)}}" placeholder="Número cédula" >
                                                @error ('dni') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3 ">
                                            <label for="nombre" class="col-sm-12 mt-2 col-form-label font-weight-bold ">Nombres 
                                                <span class="text-primary">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('nombre') is-invalid @enderror"  
                                                name="nombre" value="{{old('nombre', $estudiante->nombre)}}" placeholder="Nombre" >
                                                @error ('nombre') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="apellido" class="col-sm-12 mt-2 col-form-label font-weight-bold ">Apellidos 
                                                <span class="text-primary">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('apellido') is-invalid @enderror"  
                                                name="apellido" value="{{old('apellido', $estudiante->apellido)}}" placeholder="Apellido" >
                                                @error ('apellido') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="foto" class="col-sm-12 mt-2 col-form-label font-weight-bold ">Foto
                                                <span class="text-primary">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control @error('foto') is-invalid @enderror"  
                                                name="foto" value="{{old('foto', $estudiante->foto)}}" placeholder="Foto" >
                                                @error ('foto') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="estadocivile_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Estado Civil
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="estadocivile_id"  class="form-control @error('estadocivile_id') is-invalid @enderror  ">
                                                    <option class="form-control" value="">Seleccione un Estado Civil</option>
                                                    @foreach ($estadociviles as $estadocivile)
                                                        <option  value="{{$estadocivile->id}}"
                                                            {{old('estadocivile_id', $estudiante->estadocivile_id)==$estadocivile->id ? 'selected' : '' }}
                                                            >{{$estadocivile->estado_civil}}</option>  
                                                    @endforeach
                                                </select>
                                                @error ('estadocivile_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="fecha_nacimiento" class="col-md-12 mt-2 col-form-label font-weight-bold ">Fecha de Nacimiento
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror"  
                                                name="fecha_nacimiento" value="{{old('fecha_nacimiento', $estudiante->fecha_nacimiento)}}" placeholder="Fecha de Nacimiento" >
                                                @error ('fecha_nacimiento') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="nacionalidad" class="col-md-12 mt-2 col-form-label font-weight-bold">Nacionalidad
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('nacionalidad') is-invalid @enderror"  
                                                name="nacionalidad" value="{{old('nacionalidad', $estudiante->nacionalidad)}}" placeholder="Nacionalidad" >
                                                @error ('nacionalidad') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="ocupacione_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Ocupación
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="ocupacione_id"  class="form-control @error('ocupacione_id') is-invalid @enderror  ">
                                                    <option class="form-control" value="">Seleccione una Ocupación</option>
                                                    @foreach ($ocupaciones as $ocupacione)
                                                        <option  value="{{$ocupacione->id}}"
                                                            {{old('ocupacione_id', $estudiante->ocupacione_id)==$ocupacione->id ? 'selected' : '' }}
                                                            >{{$ocupacione->ocupacion}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('ocupacione_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Posee Discapacidad</span></label>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="discapacidad" class="col-md-12 mt-2 col-form-label font-weight-bold">
                                                <span class="text-primary"></span></label>
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input"  name="discapacidad" value="0" checked > 
                                                    <label class="form-check-label" >No</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input"  name="discapacidad" value="1"> 
                                                    <label class="form-check-label" >Si</label>
                                                </div>
                                                @error ('discapacidad') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="tipo_discapacidad" class="col-md-12 mt-2 col-form-label font-weight-bold">Tipo de Discapacidad 
                                                </label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('tipo_discapacidad') is-invalid @enderror"  
                                                name="tipo_discapacidad" value="{{old('tipo_discapacidad', $estudiante->tipo_discapacidad)}}" placeholder="Tipo de Discapacidad " >
                                                @error ('tipo_discapacidad') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="porcentaje" class="col-md-12 mt-2 col-form-label font-weight-bold">Porcentaje 
                                                </label>
                                            <div class="col-md-12">
                                                <input type="number" class="form-control @error('porcentaje') is-invalid @enderror"  
                                                name="porcentaje" value="{{old('porcentaje', $estudiante->porcentaje)}}" placeholder="Porcentaje" >
                                                @error ('porcentaje') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Lugar de Nacimiento</span></label>
                                        </div>
                                        
                                        <div class="form-group  col-sm-2">
                                            <label for="provincia_id" class="col-md-12  col-form-label font-weight-bold ">Provincia
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="provincia_id" id="provincia_id"  class="form-control @error('provincia_id') is-invalid @enderror" onchange="cambia_cantones(this)">
                                                    <option class="form-control" value="">Seleccione una provincia</option>
                                                    @foreach ($provincias as $provincia)
                                                        <option  value="{{$provincia->id}}"
                                                            {{old('provincia_id', $estudiante->provincia_id)==$provincia->id ? 'selected' : '' }}
                                                            >{{$provincia->provincia}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('provincia_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="cantone_id" class="col-md-12 col-form-label font-weight-bold ">Cantón
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="cantone_id"  id="cantone_id"   class="form-control @error('cantone_id') is-invalid @enderror  ">
                                                    <option class="form-control " value="">Seleccione un Cantón</option>
                                                    @foreach ($cantones as $cantone)
                                                        <option  value="{{$cantone->id}}"
                                                            {{old('cantone_id', $estudiante->cantone_id)==$cantone->id ? 'selected' : '' }}
                                                            >{{$cantone->canton}}</option>  
                                                    @endforeach
                                                </select>
                                                @error ('cantone_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="etnia_id" class="col-md-12  col-form-label font-weight-bold ">Etnia
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="etnia_id"  class="form-control @error('etnia_id') is-invalid @enderror  ">
                                                    <option class="form-control" value="">Seleccione una Etnia</option>
                                                    @foreach ($etnias as $etnia)
                                                        <option  value="{{$etnia->id}}"
                                                            {{old('etnia_id', $estudiante->etnia_id)==$etnia->id ? 'selected' : '' }}
                                                            >{{$etnia->etnia}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('etnia_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="email" class="col-md-12  col-form-label font-weight-bold ">Correo Electrónico
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"  
                                                name="email" value="{{old('email', $estudiante->email)}}" placeholder="Correo Electrónico" >
                                                @error ('email') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="tiposangre_id" class="col-md-12  col-form-label font-weight-bold ">Tipo de Sangre
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="tiposangre_id"  class="form-control  @error('tiposangre_id') is-invalid @enderror ">
                                                    <option class="form-control" value="">Seleccione tipo de sangre</option>
                                                    @foreach ($tiposangres as $tiposangre)
                                                        <option  value="{{$tiposangre->id}}" 
                                                            {{old('tiposangre_id', $estudiante->tiposangre_id)==$tiposangre->id ? 'selected' : '' }}
                                                            >{{$tiposangre->tipo}}</option>  
                                                    @endforeach
                                                </select> 
                                                
                                                @error ('tiposangre_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="miembro_hogar" class="col-md-12 mt-2 col-form-label font-weight-bold">Miembros del Hogar
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('miembro_hogar') is-invalid @enderror"  
                                                name="miembro_hogar" value="{{old('miembro_hogar', $estudiante->miembro_hogar)}}" placeholder="Miembros del Hogar" >
                                                @error ('miembro_hogar') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="ingreso_ec" class="col-md-12 mt-2 col-form-label font-weight-bold">Ingreso Económico
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('ingreso_ec') is-invalid @enderror"  
                                                name="ingreso_ec" value="{{old('ingreso_ec', $estudiante->ingreso_ec)}}" placeholder="Ingreso Económico" >
                                                @error ('ingreso_ec') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Dirección</span></label>
                                        </div>
                                        
                                        <div class="form-group  col-sm-2">
                                            <label for="direccion_provincia_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Provincia
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="direccion_provincia_id" id="direccion_provincia_id"  class="form-control @error('direccion_provincia_id') is-invalid @enderror" onchange="cambia_cantones1(this)" >
                                                    <option class="form-control " value="">Seleccione una provincia</option>
                                                    @foreach ($provincias as $provincia)
                                                        <option  value="{{$provincia->id}}" 
                                                            {{old('direccion_provincia_id', $estudiante->direccion_provincia_id)==$provincia->id ? 'selected' : '' }}
                                                            >{{$provincia->provincia}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('direccion_provincia_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-2">
                                            <label for="direccion_cantone_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Cantón
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="direccion_cantone_id" id="direccion_cantone_id"  class="form-control @error('direccion_cantone_id') is-invalid @enderror  ">
                                                    <option class="form-control" value="">Seleccione un Cantón</option>
                                                    @foreach ($cantones as $cantone)
                                                        <option  value="{{$cantone->id}}" 
                                                            {{old('direccion_cantone_id', $estudiante->direccion_cantone_id )==$cantone->id ? 'selected' : '' }}
                                                            >{{$cantone->canton}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('direccion_cantone_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                         
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-8">
                                            <label for="calle" class="col-md-12 mt-2 col-form-label font-weight-bold ">Calles
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('calle') is-invalid @enderror"  
                                                name="calle" value="{{old('calle', $estudiante->calle)}}" placeholder="Calles" >
                                                @error ('calle') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Información de contacto</span></label>
                                        </div>
                                       
                                        <div class="form-group  col-sm-3">
                                            <label for="telefono_fijo" class="col-md-12 mt-2 col-form-label font-weight-bold ">Convencional
                                                </label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('telefono_fijo') is-invalid @enderror"  
                                                name="telefono_fijo" value="{{old('telefono_fijo', $estudiante->telefono_fijo)}}" placeholder="Convencional" >
                                                @error ('telefono_fijo') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="telefono_movil" class="col-md-12 mt-2 col-form-label font-weight-bold ">Celular
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('telefono_movil') is-invalid @enderror"  
                                                name="telefono_movil" value="{{old('telefono_movil', $estudiante->telefono_movil)}}" placeholder="Celular" >
                                                @error ('telefono_movil') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="telefono_parentesco" class="col-md-12 mt-2 col-form-label font-weight-bold ">Teléfono pariente cercano
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('telefono_parentesco') is-invalid @enderror"  
                                                name="telefono_parentesco" value="{{old('telefono_parentesco', $estudiante->telefono_parentesco)}}" placeholder="Teléfono pariente cercano" >
                                                @error ('telefono_parentesco') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-3">
                                            <label for="parentesco" class="col-md-12 mt-2 col-form-label font-weight-bold ">Parentesco
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('parentesco') is-invalid @enderror"  
                                                name="parentesco" value="{{old('parentesco', $estudiante->parentesco)}}" placeholder="Parentesco" >
                                                @error ('parentesco') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Institución Educativa de donde proviene</span></label>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="institucion_origen" class="col-md-12 mt-2 col-form-label font-weight-bold ">Institución Educativa
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('institucion_origen') is-invalid @enderror"  
                                                name="institucion_origen" value="{{old('institucion_origen', $estudiante->institucion_origen)}}" placeholder="Institución Educativa" >
                                                @error ('institucion_origen') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="titulo_bachillerato" class="col-md-12 mt-2 col-form-label font-weight-bold ">Título de bachillerato
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('titulo_bachillerato') is-invalid @enderror"  
                                                name="titulo_bachillerato" value="{{old('titulo_bachillerato', $estudiante->titulo_bachillerato)}}" placeholder="Título de bachillerato" >
                                                @error ('titulo_bachillerato') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary">Información Adicional</span></label>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="nombre_padre" class="col-md-12 mt-2 col-form-label font-weight-bold ">Nombres y Apellidos del padre
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('nombre_padre') is-invalid @enderror"  
                                                name="nombre_padre" value="{{old('nombre_padre', $estudiante->nombre_padre)}}" placeholder="Nombres y Apellidos del padre" >
                                                @error ('nombre_padre') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="padre_ocupacione_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Ocupación
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="padre_ocupacione_id"  class="form-control @error('padre_ocupacione_id') is-invalid @enderror ">
                                                    <option class="form-control" value="">Seleccione una Ocupación</option>
                                                    @foreach ($ocupaciones as $ocupacione)
                                                        <option  value="{{$ocupacione->id}}" 
                                                            {{old('padre_ocupacione_id', $estudiante->padre_ocupacione_id)==$ocupacione->id ? 'selected' : '' }}
                                                            >{{$ocupacione->ocupacion}}</option>  
                                                    @endforeach
                                                </select>
                                                @error ('padre_ocupacione_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                           
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="instruccione_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Instrucción
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="instruccione_id"  class="form-control @error('instruccione_id') is-invalid @enderror ">
                                                    <option class="form-control " value="">Seleccione una Instrucción</option>
                                                    @foreach ($instrucciones as $instruccione)
                                                        <option  value="{{$instruccione->id}}" 
                                                            {{old('instruccione_id', $estudiante->instruccione_id)==$instruccione->id ? 'selected' : '' }}
                                                            >{{$instruccione->instruccion}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('instruccione_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                         
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="nombre_madre" class="col-md-12 mt-2 col-form-label font-weight-bold ">Nombres y apellidos de la madre
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control @error('nombre_madre') is-invalid @enderror"  
                                                name="nombre_madre" value="{{old('nombre_madre', $estudiante->nombre_madre)}}" placeholder="Nombres y apellidos de la madre" >
                                                @error ('nombre_madre') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="madre_ocupacione_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Ocupación
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="madre_ocupacione_id"  class="form-control @error('madre_ocupacione_id') is-invalid @enderror">
                                                    <option class="form-control" value="">Seleccione una Ocupación</option>
                                                    @foreach ($ocupaciones as $ocupacione)
                                                        <option  value="{{$ocupacione->id}}" 
                                                            {{old('madre_ocupacione_id', $estudiante->madre_ocupacione_id)==$ocupacione->id ? 'selected' : '' }}
                                                            >{{$ocupacione->ocupacion}}</option>  
                                                    @endforeach
                                                </select> 
                                                @error ('madre_ocupacione_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                         
                                            </div>
                                        </div>

                                        <div class="form-group  col-sm-4">
                                            <label for="madre_instruccione_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Instrucción
                                                <span class="text-primary">*</span></label>
                                            <div class="col-md-12">
                                                <select name="madre_instruccione_id"  class="form-control @error('madre_instruccione_id') is-invalid @enderror ">
                                                    <option class="form-control" value="">Seleccione una Instrucción</option>
                                                    @foreach ($instrucciones as $instruccione)
                                                        <option  value="{{$instruccione->id}}" 
                                                            {{old('madre_instruccione_id', $estudiante->madre_instruccione_id)==$instruccione->id ? 'selected' : '' }}
                                                            >{{$instruccione->instruccion}}</option>  
                                                    @endforeach
                                                </select>
                                                @error ('madre_instruccione_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                         
                                            </div>
                                        </div>
                                        <div class="form-group  col-sm-12">
                                            <label for="" class="col-md-12 col-form-label font-weight-bold">
                                                <span class="text-primary"></span></label>
                                        </div>
                                                                        
                                        <div class="form-group  col-sm-3 ">
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn  btn-block btn-primary">
                                                    Actualizar
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
</div> 
</main> 
<script>
    function cambia_cantones(select){ 
      const cantones = @json($cantones);  
      provincia = document.getElementById('provincia_id').value;
      const result = cantones.filter(cantones => cantones.provincia_id === Number(provincia));    
  
      if (provincia != 0) { 
          num_cantones = result.length;
          document.getElementById("cantone_id").length = num_cantones;
          for(i=0;i<num_cantones;i++){ 
              cantone_id.options[i].value=result[i].id;
              cantone_id.options[i].text=result[i].canton;
          }   
      }else{ 
  
          document.getElementById("cantone_id").length  = 1 
   
          cantone_id.options[0].value = "Asignar un cantón" 
          cantone_id.options[0].text = "Asignar un cantón" 
      } 
      cantone_id.options[0].selected = true 
  };
  </script>  
@endsection