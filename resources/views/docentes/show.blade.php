@extends('layouts.layout')
@section('title', ' Docentes |')
@section('content')

<main class="c-main">  
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">   

            <div class="col-sm-6">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Información personal</h4>
                    </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-user mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">NOMBRES </font>
                        </strong>
                        <h6>{{$docente->nombre}}  </h6>     
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-user mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">APELLIDOS </font>
                        </strong>
                        <h6>{{$docente->apellido}} </h6>     
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-id-card  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">CÉDULA / PASAPORTE </font>
                        </strong>
                        <h6>{{$docente->dni}} </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-id-card  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">TÍTULO ACADÉMICO </font>
                        </strong>
                        <h6>{{$docente->titulo_academico}} </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-calendar-alt  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">FECHA DE INGRESO </font>
                        </strong>
                        <h6>{{$docente->fecha_ingreso}} </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-file-alt  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">TIPO DE CONTRATO </font>
                        </strong>
                        <h6>{{$docente->tipocontrato->tipo}} </h6> 
                    </div>
                    <hr>

                  </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card c-callout c-callout-primary">
                    <div class="card-header">
                        <h4><i class=""></i>Información de contacto</h4>
                    </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small far fa-envelope mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">EMAIL </font>
                        </strong>
                        <h6>{{$docente->email}}</h6> 
                    </div>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt text-muted small mr-1"></i> 
                        <font class=" text-muted small vertical-align: inherit;"> DIRECCIÓN</font>
                    </strong>
                    <h6 ><font style="vertical-align: inherit;">
                        {{$docente->provincia->provincia}}, {{$docente->cantone->canton}} ({{$docente->calle}})
                        </font>
                    </h6>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-mobile-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;"> TELÉFONO CONVENCIONAL </font>
                        </strong>
                        <h6>{{$docente->telefono_fijo}}</h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-mobile-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;"> TELÉFONO CELULAR </font>
                        </strong>
                        <h6> {{$docente->telefono_movil}}</h6> 
                    </div>
                    <hr>                      
                  </div>
                </div>
            </div>

        </div>
    </div>  
</div> 
</main>   
@endsection