@extends('layouts.layout')
@section('title', ' Calificaciones |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class="col-sm-6">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-graduation-cap mr-4"></i>Registrar calificación</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-10">
                            
                            <form method="POST"  action="{{ route('ratings.store')}} ">
                                @csrf 
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Asignatura 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Asignatura" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Nota 1
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Nota 1" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Nota 2
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Nota 2" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Nota 3
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Nota 3" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Examen principal
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Examen principal" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Observación
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"  
                                         name="subject" value="{{old('subject')}}" placeholder="Observación" >
                                        @error ('subject') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                

                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 mt-2 offset-md-3">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Registrar
                                        </button>
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