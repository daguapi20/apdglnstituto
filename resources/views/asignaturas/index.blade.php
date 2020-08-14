@extends('layouts.layout')
@section('title', ' Asignaturas |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
               
        <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header bg-primary  d-flex justify-content-between aling-items-end ">
                        <font class=" text-light align-self-center text-black vertical-align-inherit "> <i class="font-weight-bold cil-folder mr-3"></i> ASIGNATURAS </font> 
                        <a class=" btn btn-primary " href="{{route('asignaturas.create')}}"> <i class=" font-weight-bold cil-plus mr-1"></i>Agregar</a> 
                    </div>
                    <div class="card-header d-flex justify-content-between aling-items-end">
                        
                        {{-- <font class="text-black vertical-align-inherit"> <i class="fas fa-book-open mr-3"></i> ASIGNATURAS </font>  --}}

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
                                    <th><font style="vertical-align: inherit;">Especialidad</font></font></th>
                                    <th><font style="vertical-align: inherit;">Semestre</font></font></th>
                                    <th><font style="vertical-align: inherit;">Código</font></font></th>
                                    <th><font style="vertical-align: inherit;">Nombre</font></font></th>
                                    <th><font style="vertical-align: inherit;">Hora</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;">Acción</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asignaturas as $asignatura)
                                <tr>
                                <td class="text-center" >{{$asignatura->id}} </td>
                                <td >{{$asignatura->especialidade->nombre}} </td>
                                <td >{{$asignatura->periodo->nombre}} </td>
                                <td >{{$asignatura->cod_asignatura}} </td>
                                <td >{{$asignatura->nombre}} </td>
                                <td >{{$asignatura->hora}} </td>
                               
                               
                                <td>
                                    <div class=" form-inline justify-content-center px-4 ">
                                        <a class=" btn btn-sm   btn-info mr-3 mt-2 cil-pencil" href="{{route('asignaturas.edit', $asignatura)}}"></a>
        
                                            <form class="mr-3 mt-2 " method="POST"
                                                action="{{route('asignaturas.destroy', $asignatura )}}">
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
                        {{ $asignaturas->links() }}
                    </nav>
            </div>
        </div>
    </div>    
</div> 
</main>   
@endsection

{{-- @push('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script> 
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script> 

<script>
   $(document).ready(function() {
    $('#myTable').DataTable({
       
       serverSide: true,
        ajax:  "{{ route('dataTableAsignatura')}}",
        
        columns:[
            {data: 'id'},
            {data: 'especialidade_id'},
            {data: 'cod_asignatura'},
            {data: 'nombre'},
            {data: 'hora'},
        ],
        "pageLengh": 15,
        "lengthMenu": [15, 25,50], 
        "languaje": {
            "search" : 'Buscar',
            "Next": "Siguiente",
        }, 

        "languaje":{
         "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
        },

        });
       
    });
</script>

@endpush  --}}

    