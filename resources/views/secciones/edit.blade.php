@extends('layouts.layout')
@section('title', ' Secciones |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row  justify-content-center ">
            <div class="col-lg-7">
                <div class="card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-sort-amount-down-alt   mr-4"></i> Sección</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST"  action="{{ route('secciones.update', $seccione )}} ">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label for="nombre" class="col-form-label font-weight-bold">Nombre 
                                    <span class="text-primary">*</span>
                                </label>  
                                <div class="input-group">
                                    <div class="input-group-prepend "><span class=" input-group-text">
                                    <i class=" text-primary cil-file"></i></span></div>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                        name="nombre" value="{{old('nombre', $seccione->nombre)}}" placeholder="Nombre">
                                    @error ('nombre') <span class="invalid-feedback" role="alert"> <em> {{$message}}</span> </em> @enderror  
                                </div>
                            </div> 
                            <div class="form-actions mt-4">
                                <button class=" col-4 btn btn-primary" type="submit">Actualizar</button>
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