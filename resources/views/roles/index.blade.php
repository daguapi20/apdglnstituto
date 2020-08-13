@extends('layouts.layout')
@section('title', ' Roles |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-user-shield mr-3"></i>Roles </h4> 
                 @can('create', $roles->first())
                 <a class="btn btn-primary" href="{{route('roles.create')}}"><i class="fas fa-plus-circle mr-1"></i>Agregar</a>        
                 @endcan       
                </div>
                <div class="card-body">
                    <div class="form-group col-5"></div>
                    
                    <!-- /.row--><br>
                    <table class="table table-responsive-sm table-striped table-hover table-bordered mb-0">
                    <thead class="bg-primary">
                        <tr>
                        <th class="text-center">Nro</th>
                        <th class="text-center">Identificador</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Permisos asignados</th>
                        <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                        <td class="text-center" >{{$role->id}} </td>
                        <td >{{$role->name}} </td>
                        <td >{{$role->display_name}} </td>
                        <td >{{$role->permissions->pluck('name')->implode(' ,  ')}} </td>
                        <td class="text-center">
                            <div class="row px-4">
                                @can('update', $roles->first())
                                <a class=" btn  btn-sm btn-info mr-3 mt-2 cil-pencil" href="{{route('roles.edit', $role)}}"></a> 
                                @endcan
                                
                                @can('create', $roles->first())
                          
                                    @if ($role->id !==1)
                                        <form class="mr-2 mt-2 " method="POST"
                                            action="{{route('roles.destroy', $role )}}">
                                            @csrf @method('DELETE')
                                            <button class=" btn btn-sm btn-danger cil-trash"
                                                onclick="return confirm('¿Estas seguro de eliminar el rol?')">
                                            </button>
                                        </form>    
                                    @endif
                                @endcan
                            </div> 
                        </td>
                        </tr>                      
                    @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>    
    </div>    
</div> 
</main>   
@endsection