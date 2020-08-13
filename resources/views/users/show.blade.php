@extends('layouts.layout')
@section('title', ' Usuario |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class="col-sm-4">
                <div class="card card c-callout c-callout-primary shadow-lg">
                  <div class="card-header">
                    <h4><i class="fas fa-user-plus mr-4"></i>Perfil</h4>
                  </div>
                    <div class="card-body">
                        
                          <div class="text-center">
                            <div class="profile-header-container">
                                <div class="profile-header-img" >
                                    <img class="rounded-circle" width="140" src="/uploads/avatars/{{auth()->user()->avatar }}"/>
                                    <!-- badge -->
                                </div>
                            </div>
                          </div>
          
                          <h3 class="profile-username text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->name}}</font></font></h3>
          
                          <p class="text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->getRoleNames()->implode(', ')}}</font></font></p>
          
                          <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Identificación</font></font></b> <a class="float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->cardn}}</font></font></a>
                            </li>
                            <li class="list-group-item">
                              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellidos</font></font></b> <a class="float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->lastname}}</font></font></a>
                            </li>
                            <li class="list-group-item">
                              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></b> <a class="float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->email}}</font></font></a>
                            </li>
                            <li class="list-group-item">
                              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></b> <a class="float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->getRoleNames()->implode(', ')}}</font></font></a>
                            </li>
                          </ul>
          
                          <a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-block"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar</font></font></b></a>
                        </div>
                   </div>
              </div>

              <div class="col-sm-4">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-plus mr-4"></i>Roles de usuario</h4>
                    </div>
                  <div class="card-body">
                      
                               @forelse ($user->roles as $role)
                                <strong>{{$role->name}}</strong>
                                
                                @if ($role->permissions->count())
                                <br>
                                <small class="text-muted">
                                    Permisos: <br> {{$role->permissions->pluck('name')->implode(', ')}}
                                    </small>  
                                @endif

                                @unless ($loop->last)
                                    <hr>
                                @endunless

                                @empty
                                <small class="text-muted">No tiene roles asignados</small>

                               @endforelse                     
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-plus mr-4"></i>Permisos de usuario</h4>
                    </div>
                  <div class="card-body">
                    @forelse ($user->permissions as $permission)
                    <strong>{{$permission->name}}</strong>

                    @unless ($loop->last)
                        <hr>
                    @endunless
                    @empty
                        <small class="text-muted">No tiene permisos asignados</small>
                   @endforelse
                  </div>
                </div>
              </div>




            
        </div>    
    </div>    
</div> 
</main>  
@endsection