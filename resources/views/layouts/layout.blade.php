<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Sistema Académico - Instituto San Gabriel">
    <meta name="author" content="Diego Guapi">
    <meta name="keyword" content="Sistema Académico - Instituto San Gabriel">
    <title> @yield('title')  ITSGA </title>
    <link rel="apple-touch-icon" sizes="57x57" href=" {{asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href=" {{asset('assets/favicon/apple-icon-60x60.png')}} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/apple-icon-72x72.png')}} ">
    <link rel="apple-touch-icon" sizes="76x76" href=" {{asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href=" {{asset('assets/favicon/apple-icon-114x114.png')}} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/apple-icon-120x120.png')}} ">
    <link rel="apple-touch-icon" sizes="144x144" href=" {{asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href=" {{asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href=" {{asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href=" {{asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href=" {{asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=" {{asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">  
       
    <!-- css de templates-->
    <link href="{{asset('css/free.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flag.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/brand.min.css')}}" rel="stylesheet">


    <link href="css/coreui-chartjs.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    @stack('styles')

  </head>
  <body class="c-app">
    
         @include ('layouts.sidebar')

        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{'/home'}}">Inicio</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Usuarios</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Configuración</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
              <i class="c-icon cil-bell "></i>
            </a>
          </li>

          <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
              <i class="c-icon cil-list-rich"></i>
            </a>
          </li>

          <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
              <p>
                
              </p>
              <i class="c-icon cil-envelope-open"></i>  
            </a>
          </li>
            
          <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> 
              <div class="c-avatar"><img class="c-avatar-img" src="/uploads/avatars/{{auth()->user()->avatar }}" alt=" Logo User"></div> 
            </a>

            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Mi cuenta</strong></div>
              
              <a class="dropdown-item" href="#">
                  <i class="c-icon mr-2 fas fa-user-tie"></i>
                  Mi perfil
              </a>
              <a class="dropdown-item" href="/profile">
                <i class=" c-icon mr-2 fas fa-user-circle"></i>
                Cambiar imagen
              </a>
              
              <a class="dropdown-item" href="#">
                <i class="c-icon mr-2 fas fa-id-card"></i> 
                {{ auth()->user()->name}}  {{ auth()->user()->lastname}} 
              </a>
                
                <a class="dropdown-item" href="#">
                  <i class="c-icon mr-2  fas fa-envelope"> </i>
                  {{ auth()->user()->email}} 
                </a>
                
                <a class="dropdown-item" href="#">
                    <i class="c-icon mr-2 fas fa-user-shield "></i>
                    Role<span class="badge badge-warning ml-auto">42</span>
                </a>

              {{--<div class="dropdown-header bg-light py-2"><strong>Configuración</strong></div>--}}                 
              <div class="dropdown-divider"></div>
   
              <a class="dropdown-item" href="">
                     <form action="{{ route('logout')}}" method="POST" >
                        @csrf
                        <i class="c-icon mr-2 fas fa-sign-out-alt"></i>
                        <button class=" btn  border-0 bg-white"> Cerrar sesión</button>
                    </form>
                </a>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- migajas de pan-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- menú de migajas-->
          </ol>
        </div>
      </header>
      <div class="c-body">
        
        @yield('content')

        <footer class="c-footer">
          <div><a href="https://coreui.io">SAN GABRIEL</a> &copy; 2020.</div>
          <div class="ml-auto">Desarrollo &nbsp;<a href="https://coreui.io/">Diego Guapi</a></div>
        </footer>
      </div>
    </div>
    
    <!-- Plugins de scripts requeridos template-->
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('js/svgxuse.min.js')}}"></script>
    
    
    {{-- <script src="{{asset('js/jquery.min.js')}}"></script>  --}}
    @stack('scripts')
    <script src="{{asset('js/coreui-chartjs.bundle.js')}}"></script>
    <script src="{{asset('js/coreui-utils.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>
