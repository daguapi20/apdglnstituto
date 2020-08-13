@extends('layouts.layout')
@section('title', ' Usuario |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-user-friends mr-3"></i>Usuarios </h4>
                @can('create', $users->first())
                <a class="btn btn-primary" href="{{route('users.create')}}">
                    <i class="fas fa-user-plus mr-1"></i>Nuevo
                </a> 
                @endcan 

                </div>
                <div class="card-body">
                    <div class="form-group col-5"></div>
                    
                        
                    <form class=" form-inline justify-content-end">
                            <input class="form-control  mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                   
                    <!-- /.row--><br>
                    <table class="table table-responsive-sm table-striped table-hover table-bordered mb-0">
                    <thead class="bg-primary">
                        <tr>
                        <th class="text-center">Nro</th>
                        <th>Identidad</th>
                        <th>Nombres y Apellidos</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                        <td class="text-center">{{$user->id}} </td>
                        <td >{{$user->cardn}} </th>
                        <td >{{$user->name}} {{$user->lastname}}  </td>
                        <td >{{$user->email}} </td>
                        <td >{{$user->getRoleNames()->implode(', ')}} </td>
                       
                        <td>
                            <div class="form-inline justify-content-center row px-4">
                                @can('view', $user)
                                    <a class=" btn  btn-sm  btn-dark mr-3 mt-2 cil-low-vision" href="{{route('users.show', $user)}}"></a> 
                                @endcan
                                @can('update', $user)
                                    <a class=" btn btn-sm  btn-info mr-3 mt-2 cil-pencil" href="{{route('users.edit', $user)}}"></a>
                                @endcan
                                @can('delete', $user)
                                    <form class="mr-2 mt-2 " method="POST"
                                        action="{{route('users.destroy', $user )}}">
                                        @csrf @method('DELETE')
                                        
                                        <button class=" btn btn-sm btn-danger cil-trash"
                                            onclick="return confirm('¿Estas seguro de eliminar el usuario?')">
                                        </button>
                                    </form> 
                                @endcan
                            </div> 
                        </td>
                        </tr>                      
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 ">
                    <nav class="d-flex justify-content-end">
                        {{ $users->links() }}
                    </nav>
                </div>
              </div>
            </div>
        </div>    
    </div>    
</div> 
</main>   
@endsection