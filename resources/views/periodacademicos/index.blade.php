@extends('layouts.layout')
@section('title', ' Periodo académico |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header bg-primary  d-flex justify-content-between aling-items-end ">
                        <font class=" text-light align-self-center text-black vertical-align-inherit "> <i class=" fas fa-calendar  mr-3"></i> PERIODOS ACADÉMICOS </font> 
                        <a class=" btn btn-primary " href="{{route('periodacademicos.create')}}"> <i class=" font-weight-bold cil-plus mr-1"></i>Agregar</a> 
                    </div>    
                    <div class="card-table  table-responsive">
                        <table class="table table-hover  table-bordered align-middle">
                            <thead class="thead-light ">
                                <tr>
                                    <th class="text-center "><font style="vertical-align: inherit;">Nro</font></th>
                                    <th><font style="vertical-align: inherit;">Año Periodo</font></font></th>
                                    <th><font style="vertical-align: inherit;">Estado</font></font></th>
                                    <th><font style="vertical-align: inherit;">Fecha Inicio</font></font></th>
                                    <th><font style="vertical-align: inherit;">Fecha Final</font></font></th>
                                    <th><font style="vertical-align: inherit;">Especialidades Asignados</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;">Acción</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periodacademicos as $periodacademico)
                                <tr>
                                <td class="text-center" >{{$periodacademico->id}} </td>
                                <td >{{$periodacademico->periodo}} </td>
                                @if ($periodacademico->condicion==1)
                                    
                                <td> <span class="badge badge-primary">Activo</span> </td>
                                @else
                                <td> <span class="badge badge-danger">Finalizado</span>  </td>
                                @endif
                                <td >{{$periodacademico->fecha_inicio}} </td>
                                <td >{{$periodacademico->fecha_final}} </td>
                                <td >{{$periodacademico->especialidades->pluck('nombre')->implode(' - ')}}</td>
                                <td>
                                    <div class=" form-inline justify-content-center px-4 ">
                                        <a class=" btn btn-sm   btn-info mr-3 mt-2 cil-pencil" href="{{route('periodacademicos.edit', $periodacademico)}}"></a>
        
                                            <form class="mr-3 mt-2 " method="POST"
                                                action="{{route('periodacademicos.destroy', $periodacademico )}}">
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