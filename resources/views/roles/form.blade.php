@csrf 

<div class="form-group row">
    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Identificador 
        <span class="text-primary">*</span></label>
    @if ($role->exists)
        <div class="col-md-8 mt-2">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" disabled  
            value="{{ $role->name}}" placeholder="Nombre">
            @error ('name') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                             
        </div>
    @else
    <div class="col-md-8 mt-2">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
        name="name" value="{{ old('name', $role->name) }}" placeholder="Identificador">
        @error ('name') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                             
    </div>
    @endif


</div>
<div class="form-group row">
    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">Nombre 
        <span class="text-primary">*</span></label>
    <div class="col-md-8 mt-2">
        <input id="display_name" type="text" class="form-control @error('display_name') is-invalid @enderror" 
        name="display_name" value="{{old('display_name', $role->display_name)}}" placeholder="Nombre">
        @error ('display_name') <span class="invalid-feedback" role="alert"> <strong>{{$message}}</strong></span> @enderror                                
    </div>
</div>
<div class="form-group row">
   
    <label for="name" class="col-md-3 mt-2 col-form-label font-weight-bold text-md-right">
        Asignar permisos 
    </label>
    <div class="col-md-8 mt-2">
            @include('users.partials.permissionCheckbox', ['model'=>$role])                                
    </div>
</div>