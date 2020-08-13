@extends('layouts.layout')
@section('title', ' Matrículas |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary "> 
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-book  mr-3"></i>Matrículas </h4>
                <a class="btn btn-primary" href="{{route('matriculas.create')}}"><i class="fas fa-plus-circle mr-1"></i>Agregar</a>     
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
                        <th>Estudiante</th>
                        <th>Periodo Acádemico</th>
                        <th>Especialidad</th>
                        <th>Periodo</th>
                        <th>Seccion</th>
                        <th>Paralelo</th>
                        <th>Tipo</th>
                        <th class="text-center">Opciones</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matriculas as $matricula)
                        <tr>
                        <td class="text-center">{{$matricula->id}}</td>
                        <td >{{$matricula->estudiante->nombre}} {{$matricula->estudiante->apellido}}</td>
                        {{-- <td >{{$matricula->asignacione->periodacademico->periodo}}</td> --}}
                        
                        <td >{{$matricula->asignacione->periodacademicos->pluck('periodo')->implode(', ')}}</td>
                        <td >{{$matricula->asignacione->especialidades->pluck('nombre')->implode(', ')}}</td>
                        <td >{{$matricula->asignacione->periodos->pluck('nombre')->implode(', ')}}</td>
                        <td >{{$matricula->asignacione->secciones->pluck('nombre')->implode(', ')}}</td>
                        <td >{{$matricula->asignacione->paralelos->pluck('paralelo')->implode(', ')}}</td>
                        {{-- <td >{{$matricula->asignacione->periodo->nombre}}</td> --}}
                        {{-- <td >{{$matricula->asignacione->seccione->nombre}}</td> --}}
                        {{-- <td >{{$matricula->asignacione->paralelo->paralelo}}</td> --}}
                        <td >{{$matricula->tipomatricula->tipo}} </td>
                    
                       
                        <td>
                            <div class="row form-inline justify-content-center px-4">
        
                                <a class=" btn btn-sm  btn-info mr-3 mt-2 cil-pencil" href="{{route('matriculas.edit', $matricula)}}"></a>

                                <a class=" btn  btn-sm  btn-dark mr-3 mt-2 cil-low-vision" href="{{route('matriculas.show', $matricula)}}"></a>

                                    <form class="mr-2 mt-2 " method="POST"
                                        action="{{route('matriculas.destroy', $matricula )}}">
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
                <div class="card-footer border-0">
                    <nav class="d-flex justify-content-end">
                        {{ $matriculas->links() }}
                    </nav>
                </div>
                </div>
            </div>
        </div>    
    </div>    
</div> 
</main>   
@endsection