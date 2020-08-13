@extends('layouts.layout')
@section('title', ' Usuario |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class=" container col-sm-10">
                <div class="card card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-plus mr-4"></i>Usuario</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-6">
                              
                            {{-- <form class=" form-inline justify-content-end">
                                <input type="text" class="form-control @error('cardn') is-invalid @enderror"  
                                         name="dni" value="{{old('dni')}}" placeholder="Número de cédula" >
                                <button class="btn btn-outline-primary" type="submit">Buscar</button>
                            </form> --}}
                            
                            <form method="POST"  action="{{ route('users.store')}} ">
                                @csrf 
                                <div class="form-group ">
                                    <label for="cardn" class="col-md-10 mt-2 col-form-label font-weight-bold">Cédula / Pasaporte
                                        <span class="text-primary">*</span></label>
                                    <div class="col-sm-10 mt-2">
                                        <input type="text" class="form-control @error('cardn') is-invalid @enderror"  
                                         name="cardn" value="{{old('cardn')}}" placeholder="Número de cédula" >
                                        @error ('cardn') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-md-10 mt-2 col-form-label font-weight-bold">Nombres 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                        name="name" value="{{old('name')}}" placeholder="Nombres">
                                        @error ('name') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="name" class="col-md-10 mt-2 col-form-label font-weight-bold ">Apellidos(s) 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-10 ">
                                        <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror"
                                         name="lastname" value="{{old('lastname')}}" placeholder="Apellidos">
                                         @error ('lastname') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="email" class="col-md-10 mt-2 col-form-label font-weight-bold ">E-Mail 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-10 mt-2">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{old('email')}}" placeholder="Correo electrónico" >
                                        @error ('email') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                @if (session('status'))
                                <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                 <strong>{{session('status')}}</strong>
                                 </div>
                                @endif
                               

                                <div class="form-group">
                                    <label for="email" class="col-md-10 mt-2 col-form-label font-weight-bold "></label>
                                </div>

                                <div class="form-group ">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group  ">
                                <label class="col-sm-12  col-form-label font-weight-bold">ROLES</label>
                                @include('users.partials.roleCheckbox')
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group  ">
                                <label class="col-sm-12 mt-2 col-form-label font-weight-bold"> PERMISOS</label>
                                @include('users.partials.permissionCheckbox', ['model'=>$user])
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