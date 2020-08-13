@extends('layouts.layout')
@section('title', ' Especialidad |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header bg-primary  d-flex justify-content-between aling-items-end ">
                        <font class=" text-light align-self-center text-black vertical-align-inherit "> <i class="font-weight-bold fas fa-clone mr-3"></i> ESPECIALIDADES </font> 
                        <a class=" btn btn-primary " href="{{route('especialidades.create')}}"> <i class=" font-weight-bold cil-plus mr-1"></i>Agregar</a> 
                    </div>
                    <div class="card-table  table-responsive">
                        <table class="table table-hover  table-bordered align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center"><font style="vertical-align: inherit;">Nro</font></th>
                                    <th><font style="vertical-align: inherit;">Carrera</font></font></th>
                                    <th><font style="vertical-align: inherit;">Especialidad</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;">Acción</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($especialidades as $especialidade)
                                <tr>
                                <td class="text-center" >{{$especialidade->id}} </td>
                                <td >{{$especialidade->ofertacademica->nombre}} </td>
                                <td >{{$especialidade->nombre}} </td>
                               
                               
                                <td>
                                    <div class=" form-inline justify-content-center px-4 ">
                                        <a class=" btn btn-sm   btn-info mr-3 mt-2 cil-pencil" href="{{route('especialidades.edit', $especialidade)}}"></a>
        
                                            <form class="mr-3 mt-2 " method="POST"
                                                action="{{route('especialidades.destroy', $especialidade )}}">
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