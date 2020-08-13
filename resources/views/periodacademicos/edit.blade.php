@extends('layouts.layout')
@section('title', ' Periodo Acádemico |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class="col-sm-6">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-calendar mr-4"></i>Periodo Académico</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <form method="POST"  action="{{ route('periodacademicos.update', $periodacademico)}} ">
                              @csrf @method('PUT')
                          <div class="container col-md-12">
                              <div class="row">
                                <div class="form-group row col-md-6">
                                    <label for="periodo" class="col-md-12 mt-2 col-form-label font-weight-bold">Periodo Académico 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control @error('periodo') is-invalid @enderror"  
                                         name="periodo" value="{{old('periodo', $periodacademico->periodo)}}" placeholder="Periodo Académico" >
                                        @error ('periodo') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>


                                <div class="form-group row col-md-6">
                                    <label for="condicion" class="col-md-12 mt-2 col-form-label font-weight-bold">Estado 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                         <select name="condicion" class="form-control">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                            </select>                      
                                    </div>
                                </div>

                                <div class="form-group row col-md-6">
                                    <label for="fecha_inicio" class="col-md-12 mt-2 col-form-label font-weight-bold">Fecha Inicio 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control @error('fecha_inicio') is-invalid @enderror"  
                                         name="fecha_inicio" value="{{old('fecha_inicio', $periodacademico->fecha_inicio)}}" placeholder="Fecha de Inicio" >
                                        @error ('fecha_inicio') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row col-md-6">
                                    <label for="fecha_final" class="col-md-12 mt-2 col-form-label font-weight-bold">Fecha Final 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <input type="date" class="form-control @error('fecha_final') is-invalid @enderror"  
                                         name="fecha_final" value="{{old('fecha_final', $periodacademico->fecha_final)}}" placeholder="Fecha  Final" >
                                        @error ('fecha_final') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>   

                                <div class="form-group row col-md-12">
                                    <label for="especialidades" class="col-md-12 mt-2 col-form-label font-weight-bold">Asignar Especialidades al Periodo Académico 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <select  name="especialidades[]"  class="form-control @error('especialidades') is-invalid @enderror  " multiple >
                                            @foreach ($especialidades as $especialidade)
                                                <option {{ collect(old('especialidades', $periodacademico->especialidades->pluck('id')))->contains($especialidade->id) ? 'selected' :  ''}}
                                                value="{{$especialidade->id}}">{{$especialidade->nombre}}</option>    
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Presione Ctrl para selecionar</small>
                                        @error ('especialidades') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                    </div>
                                </div>

                                <div class="form-group row col-md-12">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>                     
                                <div class="form-group row col-md-6">
                                    <div class="col-md-8 ">
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
</main>  
@endsection
