@extends('layouts.layout')
@section('title', ' Estudiante |')
@section('content')

<main class="c-main">  
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

            <div class="col-sm-12">
                <div class="card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Información personal</h4>
                    </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="c-sidebar-brand">
                                <img   width="189" height="254" src="{{asset('assets/brand/logo3.png')}}" alt="ITSGA Logo">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">

                                <div class="d-flex justify-content-between aling-items-end ">
                                    <strong><i class=" text-muted small fas fa-id-card  mr-1"></i>
                                        <font class="text-muted small vertical-align: inherit;">CÉDULA / PASAPORTE </font>
                                    </strong>
                                    <h6>{{$estudiante->dni}} </h6> 
                                </div>
                                <hr>
                                
                                <div class="d-flex justify-content-between aling-items-end ">
                                    <strong><i class=" text-muted small fas fa-user mr-1"></i>
                                        <font class="text-muted small vertical-align: inherit;">NOMBRES </font>
                                    </strong>
                                    <h6>{{$estudiante->nombre}}  </h6>     
                                </div>
                                <hr>
    
                                <div class="d-flex justify-content-between aling-items-end ">
                                    <strong><i class=" text-muted small fas fa-user mr-1"></i>
                                        <font class="text-muted small vertical-align: inherit;">APELLIDOS </font>
                                    </strong>
                                    <h6>{{$estudiante->apellido}} </h6>     
                                </div>
                                <hr>
    
                                <div class="d-flex justify-content-between aling-items-end ">
                                    <strong><i class=" text-muted small fas fa-flag  mr-1"></i>
                                        <font class="text-muted small vertical-align: inherit;">NACIONALIDAD </font>
                                    </strong>
                                    <h6>{{$estudiante->nacionalidad}} </h6> 
                                </div>
                                
                    
    
                            </div>
                        </div>
                    </div>
                                               
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Información básica</h4>
                    </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-calendar-alt  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">FECHA DE NACIMIENTO </font>
                        </strong>
                        <h6>{{$estudiante->fecha_nacimiento}}  </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-map-marker-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">LUGAR NACIMIENTO </font>
                        </strong>
                        <h6>{{$estudiante->provincia->provincia}}, {{$estudiante->cantone->canton}}</h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fas fa-user  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">ESTADO CIVIL </font>
                        </strong>
                        <h6>{{$estudiante->estadocivile->estado_civil}} </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-user-tie  mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">OCUPACIÓN </font>
                        </strong>
                        <h6>{{$estudiante->ocupacione->ocupacion}}  </h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-user-secret mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">ETNIA </font>
                        </strong>
                        <h6>{{$estudiante->etnia->etnia}}</h6> 
                    </div>
                    <hr> 

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-wheelchair mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">DISCAPACIDAD </font>
                        </strong>
                        <h6>{{$estudiante->discapacidad}} ({{$estudiante->tipo_discapacidad}}) {{$estudiante->porcentaje}} % </h6> 
                    </div>
                    
                    
                    
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Información familiar</h4>
                    </div>
                  <div class="card-body">

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small fas fa-users mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">MIEMBROS DE LA FAMILIA </font>
                            </strong>
                            <h6>{{$estudiante->miembro_hogar}}</h6> 
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small far fa-money-bill-alt mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">INGRESO ECONÓMICO </font>
                            </strong>
                            <h6> {{$estudiante->ingreso_ec}}</h6> 
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small fas fa-user mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">NOMBRES DEL PADRE</font>
                            </strong>
                            <h6>  {{$estudiante->nombre_padre}}</h6> 
                        </div>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=""></i>
                                <font class="text-muted small vertical-align: inherit;">OCUPACIÓN </font>
                            </strong>
                            <h6>  {{$estudiante->ocupacione2->ocupacion}}  </h6> 
                        </div>
                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=""></i>
                                <font class="text-muted small vertical-align: inherit;">INSTRUCCCIÓN</font>
                            </strong>
                            <h6> {{ $estudiante->instruccione->instruccion }}</h6> 
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small fas fa-female mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">NOMBRES DE LA MADRE</font>
                            </strong>
                            <h6>  {{$estudiante->nombre_madre}}</h6> 
                        </div>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=""></i>
                                <font class="text-muted small vertical-align: inherit;">OCUPACIÓN </font>
                            </strong>
                            <h6>  {{$estudiante->ocupacione3->ocupacion}}  </h6> 
                        </div>
                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=""></i>
                                <font class="text-muted small vertical-align: inherit;">INSTRUCCCIÓN</font>
                            </strong>
                            <h6> {{ $estudiante->instruccione2->instruccion }}</h6> 
                        </div>
                        <hr>
                                         
                  </div>
                </div>
              </div>

            <div class="col-sm-6">
                <div class="card c-callout c-callout-primary  shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Información de contacto</h4>
                    </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small far fa-envelope mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;">EMAIL </font>
                        </strong>
                        <h6>{{$estudiante->email}}</h6> 
                    </div>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt text-muted small mr-1"></i> 
                        <font class=" text-muted small vertical-align: inherit;"> DIRECCIÓN</font>
                    </strong>
                    <h6 ><font style="vertical-align: inherit;">
                        {{$estudiante->provincia2->provincia}}, {{$estudiante->cantone2->canton}} ({{$estudiante->calle}})
                        </font>
                    </h6>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-mobile-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;"> TELÉFONO CONVENCIONAL </font>
                        </strong>
                        <h6>{{$estudiante->telefono_fijo}}</h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-mobile-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;"> TELÉFONO CELULAR </font>
                        </strong>
                        <h6> {{$estudiante->telefono_movil}}</h6> 
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between aling-items-end ">
                        <strong><i class=" text-muted small fas fa-mobile-alt mr-1"></i>
                            <font class="text-muted small vertical-align: inherit;"> CONTACTO FAMILIAR</font>
                        </strong>
                        <h6> {{$estudiante->parentesco}} / {{$estudiante->telefono_parentesco}}</h6> 
                    </div>
                    <hr>
                                           
                  </div>
                </div>
            </div>

             

              

              <div class="col-sm-6">
                <div class="card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class=""></i>Formación académica</h4>
                    </div>
                  <div class="card-body">
                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small fas fa-school mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">INSTITUCIÓN QUE PROVIENE </font>
                            </strong>
                            <h6>{{$estudiante->institucion_origen}}</h6> 
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between aling-items-end ">
                            <strong><i class=" text-muted small fas fa-book-open mr-1"></i>
                                <font class="text-muted small vertical-align: inherit;">TÍTULO DE BACHILLER </font>
                            </strong>
                            <h6>{{$estudiante->titulo_bachillerato}}</h6> 
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