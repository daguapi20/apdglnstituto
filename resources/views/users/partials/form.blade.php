@csrf 
<div class="form-group row">
    <label for="name" class="col-md-3 col-form-label font-weight-bold text-md-right">Nro cédula 
        <span class="text-primary">*</span></label>
    <div class="col-md-8">
        <input type="text" class="form-control  " name="cardn" value="{{old('cardn' , $user->cardn)}}">                               
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-3 col-form-label font-weight-bold text-md-right">Nombre(s) 
        <span class="text-primary">*</span></label>
    <div class="col-md-8">
        <input id="name" type="text" class="form-control " name="name" value="" >                               
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-3 col-form-label font-weight-bold text-md-right">Apellidos(s) 
        <span class="text-primary">*</span></label>
    <div class="col-md-8">
        <input id="name" type="text" class="form-control " name="lastname" value="" >                               
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-3 col-form-label font-weight-bold text-md-right">E-Mail <span class="text-primary">*</span></label>
    <div class="col-md-8">
        <input id="email" type="email" class="form-control " name="email" value="" >                             
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-3 col-form-label font-weight-bold text-md-right">Avatar</label>
    <div class="col-md-8">
        <input  type="file" class="form-control  " name="avatar" value="">                             
    </div>
</div>

{{--<div class="form-group row">
    <label for="password" class="col-md-3 col-form-label text-md-right">Contraseña</label>
    <div class="col-md-7">
        <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">          
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Confirmar contraseña</label>
    <div class="col-md-7">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>--}}

