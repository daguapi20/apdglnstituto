@extends('layouts.layout')
@section('title', ' Asignaciones|')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header bg-primary  d-flex justify-content-between aling-items-end ">
                        <font class=" text-light align-self-center text-black vertical-align-inherit "> <i class="font-weight-bold fas fa-clone mr-3"></i> ASIGNACIONES </font> 
                        <a class=" btn btn-primary " href="{{route('asignaciones.create')}}"> <i class=" font-weight-bold cil-plus mr-1"></i>Agregar</a> 
                    </div>
                    <div class="card-header d-flex justify-content-between aling-items-end">

                        <form class="col-lg-12 px-0 my-2 my-lg-0 no-waves-effect">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-gradient waves-effect waves-light" type="button"><span class="gradient"><span class="gradient"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buscar</font></font></span></span></button>
                                </div>
                            </div>
                        </form>
                           
                    </div>
                    
                    <div class="card-table  table-responsive">
                        <table class="table table-hover  table-bordered align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center"><font style="vertical-align: inherit;">Nro</font></th>
                                    <th><font style="vertical-align: inherit;">Periodo Académico</font></font></th>
                                    <th><font style="vertical-align: inherit;">Especialidad</font></font></th>
                                    <th><font style="vertical-align: inherit;">Periodo</font></font></th>
                                    <th><font style="vertical-align: inherit;">Sección</font></font></th>
                                    <th><font style="vertical-align: inherit;">paralelo</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;">Acción</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asignaciones as $asignacione)
                                <tr>
                                <td class="text-center" >{{$asignacione->id}} </td>
                                <td >{{$asignacione->periodacademicos->pluck('periodo')->implode(', ')}}</td>
                                <td >{{$asignacione->especialidades->pluck('nombre')->implode(', ')}}</td>
                                <td >{{$asignacione->periodos->pluck('nombre')->implode(', ')}} </td>
                                <td >{{$asignacione->secciones->pluck('nombre')->implode(', ')}} </td>
                                <td >{{$asignacione->paralelos->pluck('paralelo')->implode(', ')}} </td>
                         
                                <td>
                                    <div class=" form-inline justify-content-center px-4 ">
                                        <a class=" btn btn-sm   btn-info mr-3 mt-2 cil-pencil" href="{{route('asignaciones.edit', $asignacione)}}"></a>
        
                                            <form class="mr-3 mt-2 " method="POST"
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
                
                    <nav class="d-flex justify-content-end">
                        {{-- {{ $asignaciones->links() }} --}}
                    </nav>
            </div>
        </div>   
    </div>    
</div> 
</main>   
@endsection