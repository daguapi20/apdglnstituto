@extends('layouts.layout')
@section('title', ' Docentes |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        @include('partials.success')
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card card-accent-primary ">
                <div class="card-header d-flex justify-content-between aling-items-end"> 
                        <h4><i class=" fas fa-user-friends mr-3"></i>Docentes </h4>
                <a class="btn btn-primary" href="{{route('docentes.create')}}">
                    <i class="fas fa-plus-circle mr-1"></i>Agregar
                </a> 
                 
                </div>
                <div class="card-body">
                    <div class="form-group col-5"></div>
                       
                    <form class=" form-inline justify-content-end">
                            <input class="form-control  mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                   
                    <!-- /.row--><br>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered mb-0">
                        <thead class="bg-primary">
                            <tr>
                            <th class="text-center">Nro</th>
                            <th >Cédula / Pasaporte</th>
                            <th >Nombres y Apellidos</th>
                            <th >Email</th>
                            <th  >Contactos</th>
                            <th >Estado</th>
                            <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docentes as $docente)
                            <tr>
                            <td class="text-center">{{$docente->id}} </td>
                            <td >{{$docente->dni}} </td>
                            <td >{{$docente->nombre}} {{$docente->apellido}} </td>
                            <td >{{$docente->email}} </td>
                            <td >{{$docente->telefono_fijo}} / {{$docente->telefono_movil}} </td>
                            <td >{{$docente->estadocente->estado}} </td>
                            
                            <td>
                                <div class="form-inline justify-content-center row px-4">
                                    
                                        <a class=" btn btn-sm   btn-dark mr-3 mt-2 cil-low-vision" href="{{route('docentes.show', $docente)}}"></a> 
                                
                                        <a class=" btn btn-sm  btn-info mr-3 mt-2 cil-pencil" href="{{route('docentes.edit', $docente)}}"></a>
                                    
                                        <form class="mr-3 mt-2 " method="POST"
                                            action="{{route('docentes.destroy', $docente )}}">
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
                <div class="card-footer border-0 ">
                    <nav class="d-flex justify-content-end">
                        {{ $docentes->links() }}
                    </nav>
                </div>
                </div>
            </div>
        </div>  --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-accent-primary shadow-lg">
                    <div class="card-header bg-primary  d-flex justify-content-between aling-items-end ">
                        <font class=" text-light align-self-center text-black vertical-align-inherit "> <i class=" fas fa-user-friends mr-3"></i> DOCENTES </font> 
                        <a class=" btn btn-primary " href="{{route('docentes.create')}}"> <i class=" font-weight-bold cil-plus mr-1"></i>Agregar</a> 
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
                                    <th><font style="vertical-align: inherit;">Cédula / Pasaporte</font></font></th>
                                    <th><font style="vertical-align: inherit;">Nombres y Apellidos</font></font></th>
                                    <th><font style="vertical-align: inherit;">Email</font></font></th>
                                    <th><font style="vertical-align: inherit;">Contactos</font></font></th>
                                    <th><font style="vertical-align: inherit;">Estado</font></font></th>
                                    <th class="text-center"><font style="vertical-align: inherit;">Acción</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($docentes as $docente)
                                <tr>
                                <td class="text-center" >{{$docente->id}} </td>
                                <td class="text-center" >{{$docente->dni}} </td>
                                <td >{{$docente->nombre}} {{$docente->apellido}}  </td>
                                <td >{{$docente->email}} </td>                        
                                <td >{{$docente->telefono_fijo}} / {{$docente->telefono_movil}}</td>
                                <td >{{$docente->estadocente->estado}} </td>
                                <td>
                                    <div class=" form-inline justify-content-center px-4 ">
                                        <a class=" btn btn-sm   btn-info mr-3 mt-2 cil-pencil" href="{{route('docentes.edit', $docente)}}"></a>
                                        <a class=" btn  btn-sm  btn-dark mr-3 mt-2 cil-low-vision" href="{{route('docentes.show', $docente)}}"></a>
        
                                            <form class="mr-3 mt-2 " method="POST"
                                                action="{{route('docentes.destroy', $docente )}}">
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
                    <nav class="  d-flex justify-content-end">
                        {{ $docentes->links() }}
                    </nav>
            </div>
        </div> 
    </div>    
</div> 
</main>   
@endsection