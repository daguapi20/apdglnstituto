@extends('layouts.layout')
@section('title', ' Usuario |')
@section('content')
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
           <div class="">
            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

            @endif
                <div class="row justify-content-center">
                    
                    <div class="profile-header-container">
                        <div class="profile-header-img" >
                            <img class="rounded-circle" width="140" src="/uploads/avatars/{{auth()->user()->avatar }}"/>
                            <!-- badge -->
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                  
                    <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control-file " name="avatar" id="avatarFile" aria-describedby="fileHelp" accept="image/*">
                            <small id="fileHelp" class="form-text text-muted">Cargue un archivo de imagen válido. El tamaño de la imagen no debe ser superior a 2 MB..</small>
                        </div>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                        <button type="submit" class="btn btn-block btn-primary mb-4">Actualizar nueva imagen</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection 