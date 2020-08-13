@extends('layouts.layout')
@section('title', ' Especialidad |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">        
        <div class="row  justify-content-center ">
            <div class="col-lg-6">
                <div class="card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-layer-group  mr-4"></i> Especialidad</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST"  action="{{ route('especialidades.update', $especialidade)}} ">
                            @csrf @method('PUT')
                            
                            <div class="form-group">
                                <label for="ofertacademica_id" class="col-form-label font-weight-bold">Oferta Académica
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-check"></i></span></div>
                                    <select name="ofertacademica_id"  class="form-control @error('ofertacademica_id') is-invalid @enderror ">
                                        <option  class="form-control" value="">Seleccionar</option>
                                        @foreach ($ofertacademicas as $ofertacademica)
                                        <option  value="{{$ofertacademica->id}}"
                                            {{old('ofertacademica_id', $especialidade->ofertacademica_id)==$ofertacademica->id ? 'selected' : '' }}
                                            >{{$ofertacademica->nombre}}</option>  
                                        @endforeach
                                    </select> 
                                    @error ('ofertacademica_id') <span class="invalid-feedback" role="alert"> <em> {{$message}}<em> </span> @enderror 
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
                                        name="nombre" value="{{old('nombre', $especialidade->nombre)}}" placeholder="Nombre">
                                    @error ('nombre') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 

                            <div class="form-actions mt-4">
                                <button class=" col-4 btn btn-primary" type="submit"><font style="vertical-align: inherit;">Actualizar</font></font></button>
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