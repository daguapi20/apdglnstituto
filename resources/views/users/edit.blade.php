@extends('layouts.layout')
@section('title', ' Usuario |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">

              <div class="col-sm-6">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-edit mr-4"></i>Información personal</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-10">
                            <form method="POST" enctype="multipart/form-data" action="{{route('users.update', $user)}} ">
                                @csrf @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label font-weight-bold text-md-right">Nro cédula 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control @error('cardn') is-invalid @enderror" 
                                        name="cardn" value="{{old('cardn', $user->cardn)}}" placeholder="Número de cédula">
                                        @error ('cardn') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Nombre(s) 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2 ">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                         name="name" value="{{old('name', $user->name)}}" placeholder="Nombres" > 
                                         @error ('name') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                 
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Apellidos(s) 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" 
                                        name="lastname" value="{{old('lastname', $user->lastname)}}" placeholder="Apellidos" >
                                        @error ('lastname') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                               
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">E-Mail 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-8 mt-2">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                         name="email" value="{{old('email', $user->email)}}" placeholder="Correo Electrónico" >
                                         @error ('email') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                            
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label for="password" 
                                    class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Contraseña</label>      
                                    </label>
                                    <div class="col-md-8 mt-2">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                         name="password" placeholder="Contraseña">
                                         @error ('password') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror   
                                        <span class="help-block">Dejar en blanco si no quieres cambiar la contraseña</span>        
                                    </div>
                                    
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirmation" 
                                    class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Repite contraseña</label>
                                    <div class="col-md-8 mt-2 ">
                                        <input  type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                         name="password_confirmation" placeholder="Repite contraseña">
                                         @error ('password_confirmation') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 mt-2 offset-md-3">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Actualizar
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                          
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-edit mr-4"></i>Roles</h4>
                    </div>
                  <div class="card-body">

                      @role('Admin')
                        <form method="POST" action="{{route('users.roles.update', $user)}}">
                            @csrf @method('PUT')
                            @include('users.partials.roleCheckbox')
                            <button class="btn btn-primary btn-block">Actualizar roles</button>
                        </form>
                      @else
                        <ul class="list-group">
                            @forelse ($user->roles as $role)
                                <li class="list-group-item">{{$role->name}}</li>
                            @empty
                                <li class="list-group-item">No tienes roles</li>
                            @endforelse
                        </ul>
                      @endrole

                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-edit mr-4"></i>Permisos</h4>
                    </div>
                  <div class="card-body">
                    @role('Admin')
                    <form method="POST" action="{{route('users.permissions.update', $user)}}">
                        @csrf @method('PUT')
                        @include('users.partials.permissionCheckbox', ['model'=>$user])

                        <button class="btn btn-primary btn-block">Actualizar permisos</button>
                    </form>
                    @else
                        <ul class="list-group">
                            @forelse ($user->permissions as $permission)
                                <li class="list-group-item">{{$permission->name}}</li>
                            
                            @empty
                                <li class="list-group-item">No tienes permisos</li>
                            @endforelse
                        </ul>
                    @endrole

                  </div>
                </div>
              </div>
            
        </div>    
    </div>    
</div> 
</main>  
@endsection