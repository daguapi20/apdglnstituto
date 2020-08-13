@extends('layouts.layout')
@section('title', ' Docentes |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">          
              <div class="col-sm-12">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-plus mr-4"></i>Registrar profesor</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <form method="POST"  action="{{ route('docentes.store')}} ">
                              @csrf
                          <div class="container col-md-12">
                            <div class="row">
                            <div class="form-group col-sm-12">
                                <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                    <span class="text-primary">Datos personales</span></label>
                            </div>
                            
                                <div class="form-group col-sm-4">
                                    <label for="dni" class=" col-md-12 mt-2 col-form-label font-weight-bold ">Número de cédula 
                                        <span class="text-primary">*</span></label>
                                    <div class=" col-md-12">
                                        <input type="text" class="form-control @error('dni') is-invalid @enderror"  
                                         name="dni" value="{{old('dni')}}" placeholder="Número de cédula" >
                                        @error ('dni') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                        
                                    </div>
                                </div> 

                                <div class="form-group  col-sm-4">
                                    <label for="nombre" class="col-md-12 mt-2 col-form-label font-weight-bold ">Nombre(s) 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                        name="nombre" value="{{old('nombre')}}" placeholder="Nombres">
                                        @error ('nombre') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
                                    </div>
                                </div>

                                <div class="form-group  col-sm-4">
                                    <label for="apellido" class="col-md-12 mt-2 col-form-label font-weight-bold ">Apellidos(s) 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror"
                                         name="apellido" value="{{old('apellido')}}" placeholder="Apellidos">
                                         @error ('apellido') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
                                    </div>
                                </div>
     
                                <div class="form-group col-sm-4">
                                    <label for="email" class="col-md-12 mt-2 col-form-label font-weight-bold">E-Mail 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12 ">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{old('email')}}" placeholder="Correo electrónico" >
                                        @error ('email') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="titulo_academico" class="col-md-12 mt-2 col-form-label font-weight-bold ">Título Académico 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="titulo_academico" type="text" class="form-control @error('titulo_academico') is-invalid @enderror" 
                                        name="titulo_academico" value="{{old('titulo_academico')}}" placeholder="Título Académico" >
                                        @error ('titulo_academico') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="fecha_ingreso" class="col-md-12 mt-2 col-form-label font-weight-bold ">Fecha de Ingreso
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="fecha_ingreso" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" 
                                        name="fecha_ingreso" value="{{old('fecha_ingreso')}}" placeholder="Fecha de Ingreso" >
                                        @error ('fecha_ingreso') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                        <span class="text-primary">Información de contacto</span></label>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="telefono_fijo" class="col-md-12 mt-2 col-form-label font-weight-bold ">Teléfono fijo 
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="telefono_fijo" type="text" class="form-control @error('telefono_fijo') is-invalid @enderror" 
                                        name="telefono_fijo" value="{{old('telefono_fijo')}}" placeholder="Teléfono fijo" >
                                        @error ('telefono_fijo') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                <div class="form-group  col-sm-3">
                                    <label for="telefono_movil" class="col-md-12 mt-2 col-form-label font-weight-bold">Teléfono celular  
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="telefono_movil" type="text" class="form-control @error('telefono_movil') is-invalid @enderror" 
                                        name="telefono_movil" value="{{old('telefono_movil')}}" placeholder="Número celular">
                                        @error ('telefono_movil') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>
                            
                                <div class="form-group col-sm-12">
                                    <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                        <span class="text-primary">Dirección</span></label>
                                </div>

                                <div class="form-group col-sm-3 ">
                                    <label for="provincia_id" class="col-md-12 mt-2 col-form-label font-weight-bold ">Provincia
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="provincia_id" id="provincia_id" class="form-control @error('provincia_id') is-invalid @enderror" onchange="cambia_cantones(this)" >
                                            <option class="form-control " value="">Asignar una provincia</option>
                                            @foreach ($provincias as $provincia)
                                                <option  value="{{$provincia->id}} 
                                                    {{old('provincia_id')==$provincia->id ? 'selected' : '' }}"
                                                    >{{$provincia->provincia}}</option>  
                                            @endforeach
                                        </select>
                                        @error ('provincia_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                                               
                                    </div>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="cantone_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Cantón
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="cantone_id" id="cantone_id" class="form-control @error('cantone_id') is-invalid @enderror" >
                                            <option class="form-control " value="">Asignar un cantón</option>
                                            @foreach ($cantones as $cantone)
                                                <option  value="{{$cantone->id}} "
                                                    {{old('cantone_id')==$cantone->id ? 'selected' : '' }}
                                                    >{{$cantone->canton}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('cantone_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror
                                                               
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="calle" class="col-md-12 mt-2 col-form-label font-weight-bold">Calles
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" 
                                        name="calle" value="{{old('calle')}}" placeholder="Calles" >
                                        @error ('calle') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                              
                                    </div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                        <span class="text-primary">Autorización</span></label>
                                </div>

                                <div class="form-group col-sm-3 ">
                                    <label for="estadocente_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Estado del docente
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="estadocente_id"  class="form-control @error('estadocente_id') is-invalid @enderror">
                                            <option class="form-control" value="">Asignar un estado</option>
                                            @foreach ($estadocentes as $estadocente)
                                                <option  value="{{$estadocente->id}}" 
                                                    {{old('estadocente_id')==$estadocente->id ? 'selected' : '' }}
                                                    >{{$estadocente->estado}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('estadocente_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                                                
                                    </div>
                                </div>

                                <div class="form-group col-sm-3 ">
                                    <label for="tipocontrato_id" class="col-md-12 mt-2 col-form-label font-weight-bold">Tipo de Contrato
                                        <span class="text-primary">*</span></label>
                                    <div class="col-md-12">
                                        <select name="tipocontrato_id"  class="form-control @error('tipocontrato_id') is-invalid @enderror">
                                            <option class="form-control" value="">Asignar un tipo de contrato</option>
                                            @foreach ($tipocontratos as $tipocontrato)
                                                <option  value="{{$tipocontrato->id}}" 
                                                    {{old('tipocontrato_id')==$tipocontrato->id ? 'selected' : '' }}
                                                    >{{$tipocontrato->tipo}}</option>  
                                            @endforeach
                                        </select> 
                                        @error ('tipocontrato_id') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror 
                                                                
                                    </div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label  class="col-md-12 mt-2 col-form-label font-weight-bold ">
                                        <span class="text-primary"></span></label>
                                </div>

                                <div class="form-group col-sm-3 mb-0">
                                    <div class="col-md-12 mt-2 ">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                          </div>
                          
                      </div>
                  </div>
                </div>
              </div>


            
        </div>    
    </div>    
</div> 
</main>  
<script>
  function cambia_cantones(select){ 
    const cantones = @json($cantones);
    //console.log(cantones);

    provincia = document.getElementById('provincia_id').value;
    //console.log(catego);


    const result = cantones.filter(cantones => cantones.provincia_id === Number(provincia));
    //console.log(result);
    

    if (provincia != 0) { 

        num_cantones = result.length;

        document.getElementById("cantone_id").length = num_cantones;
        //console.log(num_cantones);
        for(i=0;i<num_cantones;i++){ 
            cantone_id.options[i].value=result[i].id;
            cantone_id.options[i].text=result[i].canton;
            //console.log(result[i].id);
            //console.log(result[i].cantone);
        }   
    }else{ 

        document.getElementById("cantone_id").length  = 1 
 
        cantone_id.options[0].value = "Asignar un cantón" 
        cantone_id.options[0].text = "Asignar un cantón" 
    } 

    cantone_id.options[0].selected = true 
}

</script>
@endsection