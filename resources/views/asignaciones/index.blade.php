@extends('layouts.layout')
@section('title', ' Asignaciones|')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-clone mr-3"></i>Asignaciones </h4>
                <a class="btn btn-primary" href="{{route('asignaciones.create')}}"><i class="fas fa-plus-circle mr-1"></i>Agregar</a>     
                </div>
                <div class="card-body">
                    <div class="form-group col-5"></div>
                    <!-- /.row--><br>
                    <table class="table table-responsive-sm table-striped table-hover table-bordered mb-0">
                    <thead class="bg-primary">
                        <tr>
                        <th class="text-center">Nro</th>
                        <th>Periodo Académico</th>
                        <th>Especialidad</th>
                        <th >Periodo</th>
                        <th >Seccion</th>
                        <th >Paralelo</th>
                        <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asignaciones as $asignacione)
                        <tr>
                        <td class="text-center" >{{$asignacione->id}} </td>
                        <td >{{$asignacione->periodacademicos->pluck('periodo')->implode(', ')}}</td>
                        {{-- <td >{{$asignacione->periodacademico->periodo}}</td> --}}
                        <td >{{$asignacione->especialidades->pluck('nombre')->implode(', ')}}</td>
                        <td >{{$asignacione->periodos->pluck('nombre')->implode(', ')}} </td>
                        <td >{{$asignacione->secciones->pluck('nombre')->implode(', ')}} </td>
                        <td >{{$asignacione->paralelos->pluck('paralelo')->implode(', ')}} </td>
                    
                       
                        <td>
                            <div class="form-inline justify-content-center row px-4">
        
                                <a class=" btn btn-sm  btn-info mr-3 mt-2 cil-pencil" href="{{route('asignaciones.edit', $asignacione)}}"></a>

                                    <form class="mr-2 mt-2 " method="POST"
                                        action="{{route('asignaciones.destroy', $asignacione )}}">
                                        @csrf @method('DELETE')
                                        
                                        <button class=" btn btn-sm btn-danger cil-trash"
                                            onclick="return confirm('¿Estás seguro de que deseas eliminar esta función?')">
                                        </button>
                                    </form> 
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