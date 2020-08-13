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
                          <form method="POST"  action="{{ route('asignaciones.update', $asignacione)}} ">
                              @csrf @method('PUT')
                          <div class="container col-sm-12">
                              <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="periodacademicos" class="col-md-12 mt-2 col-form-label font-weight-bold">Periodo Académico
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="periodacademicos"  class="form-control @error('periodacademicos') is-invalid @enderror  ">
                                            <option value="" class="form-control ">Seleccione un periodo</option>
                                            @foreach ($periodacademicos as $periodacademico)
                                                <option {{collect(old('periodacademicos', $asignacione->periodacademicos->pluck('id')))
                                                        ->contains($periodacademico->id) ? 'selected' :  ''}}
                                                        value="{{$periodacademico->id}}">{{$periodacademico->periodo}}
                                                </option> 
                                            @endforeach
                                        </select>
                                        @error ('periodacademicos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                          
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="especialidades" class="col-md-12 mt-2 col-form-label font-weight-bold">Especialidad
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="especialidades"  class="form-control @error('especialidades') is-invalid @enderror  ">
                                            <option value="" class="form-control ">Seleccione una Especialidad</option>
                                            @foreach ($especialidades as $especialidade)
                                                <option {{collect(old('especialidades', $asignacione->especialidades->pluck('id')))
                                                    ->contains($especialidade->id) ? 'selected' :  ''}}
                                                    value="{{$especialidade->id}}">{{$especialidade->nombre}}
                                                </option>    
                                            @endforeach
                                        </select> 
                                        @error ('especialidades') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror  
                                                                
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="periodos" class="col-md-12 mt-2 col-form-label font-weight-bold ">Periodo
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="periodos[]"  class="form-control @error('periodos') is-invalid @enderror " multiple >
                                            @foreach ($periodos as $periodo)
                                                <option {{collect(old('periodos', $asignacione->periodos->pluck('id')))
                                                        ->contains($periodo->id) ? 'selected' :  ''}}
                                                        value="{{$periodo->id}}">{{$periodo->nombre}}
                                                </option>  
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Presione Ctrl para selecionar</small> 
                                        @error ('periodos') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="secciones" class="col-md-12 mt-2 col-form-label font-weight-bold ">Seccion
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="secciones"  class="form-control @error('secciones') is-invalid @enderror  ">
                                            <option value="" class="form-control ">Seleccione una seccion</option>
                                            @foreach ($secciones as $seccione)
                                                <option {{collect(old('secciones', $asignacione->secciones->pluck('id')))
                                                    ->contains($seccione->id) ? 'selected' :  ''}}
                                                    value="{{$seccione->id}}">{{$seccione->nombre}}
                                                </option>  
                                            @endforeach
                                        </select> 
                                        @error ('secciones') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                       
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="paralelo_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Paralelo
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="paralelos"  class="form-control @error('paralelos') is-invalid @enderror  ">
                                            <option value="" class="form-control ">Seleccione un paralelo</option>
                                            @foreach ($paralelos as $paralelo)
                                            <option {{collect(old('paralelos', $asignacione->paralelos->pluck('id')))
                                                    ->contains($paralelo->id) ? 'selected' :  ''}}
                                                    value="{{$paralelo->id}}">{{$paralelo->paralelo}}
                                            </option> 
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