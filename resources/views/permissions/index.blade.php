@extends('layouts.layout')
@section('title', ' Permisos |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-key mr-3"></i>Permisos </h4> 
                <a class="btn btn-primary" href="{{route('permissions.create')}}"><i class="fas fa-key mr-1"></i>Nuevo</a>     
                </div>
                <div class="card-body">
                    <div class="form-group col-5"></div>
                    
                        
                    <form class=" form-inline justify-content-end">
                            <input class="form-control  mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-primary" type="submit">Buscar</button>
                        </form>
                   
                    <!-- /.row--><br>
                    <table class="table table-responsive-sm table-striped table-hover table-bordered mb-0">
                    <thead class="bg-primary">
                        <tr>
                        <th class="text-center">Nro</th>
                        <th class="text-center">Nombre del permiso</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                        <th >{{$permission->id}} </th>
                        <td >{{$permission->name}} </td>
                        
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