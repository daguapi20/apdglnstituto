    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        
        <div class="c-sidebar-brand d-lg-down-none">
            <img class="c-sidebar-brand-full"  width="118" height="46" src="{{asset('assets/brand/logo1.png')}}" alt="ITSGA Logo">
            <img class="c-sidebar-brand-minimized" width="40" height="46" src="{{asset('assets/brand/logo3.png')}}" alt="ITSGA Logo">
        </div>

        <ul class="c-sidebar-nav">
        
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{'/home'}}">
            <i class="fas fa-tachometer-alt c-sidebar-nav-icon"></i>
            Inicio<span class="badge badge-info">NEW</span>
            </a>
        </li>

        <li class="c-sidebar-nav-title">ACCESO RÁPIDO</li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('matriculas.index')}}">
            <i class=" fas fa-book c-sidebar-nav-icon"></i>
            Matrículas
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="typography.html">
            <i class=" cil-pencil c-sidebar-nav-icon"></i>  
            Typography
            </a>
        </li>

        <li class="c-sidebar-nav-title">EXPLORAR</li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon fas fa-user-lock "></i>  
            Control de Acceso
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('view', new App\User)
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('users.index')}}">
                        <span class="c-sidebar-nav-icon fas fa-user"></span> 
                        Usuarios
                    </a>
                </li>
                @else
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{route('users.show', auth()->user())}}">
                            <span class="c-sidebar-nav-icon fas fa-user"></span> 
                            Mi perfil
                        </a>
                    </li>
                @endcan

                @can('view', new \Spatie\Permission\Models\Role)
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('roles.index')}}">
                        <span class="c-sidebar-nav-icon fas fa-user-shield"></span> 
                        Roles
                    </a>
                </li>
                @endcan

                @can('view', new \Spatie\Permission\Models\Permission)
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('permissions.index')}}">
                        <span class="c-sidebar-nav-icon fas fa-key"></span> 
                        Permisos
                    </a>
                </li>
                @endcan
            </ul>
        </li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class=" c-sidebar-nav-icon fas fa-award"></i> 
            Académico
            </a>

            <ul class="c-sidebar-nav-dropdown-items">     

            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"><span class="c-sidebar-nav-icon"></span> Notas</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"><span class="c-sidebar-nav-icon"></span> Suspención</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
            
            </ul>
        </li>
        
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="charts.html">
            <i class="c-sidebar-nav-icon cil-chart-pie"></i>  
            Charts
            </a>
            </li>

            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon fas fa-clipboard-check "></i>  
                Asignaciones
                </a>
    
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{route('periodacademicos.index')}}">
                            <i class="c-sidebar-nav-icon"></i> Periodo Acádemico
                        </a>
                    </li>
    
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{route('asignaciones.index')}}">
                            <i class="c-sidebar-nav-icon "></i> Asignaciones
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="#">
                            <i class="c-sidebar-nav-icon "></i> Horarios
                        </a>
                    </li>

                </ul>
            </li>
        
            <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon fas fa-folder-plus "></i>  
            Registros
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('estudiantes.index')}}">
                        <i class="c-sidebar-nav-icon"></i> Estudiantes
                    </a>
                </li>

                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('docentes.index')}}">
                        <i class="c-sidebar-nav-icon "></i> Docentes
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon fas fa-business-time "></i>  
            Horarios
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
                {{-- <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{route('schedulers.index')}}">
                        <i class="c-sidebar-nav-icon fas fa-clock"></i> Horario Clases
                    </a>
                </li> --}}

                
            </ul>
        </li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class=" c-sidebar-nav-icon fas fa-award"></i> 
             Configuración Inicial
            </a>

            <ul class="c-sidebar-nav-dropdown-items">

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('ofertacademicas.index')}}">
                   <i class="c-sidebar-nav-icon cil-user"></i>
                    Oferta Académica 
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('especialidades.index')}}">
                    <i class="c-sidebar-nav-icon "></i>
                    Especialidades
                </a>
            </li>
            
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('periodos.index')}}">
                    <i class=" c-sidebar-nav-icon "></i>
                    Periodos
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('secciones.index')}}">
                    <i class="c-sidebar-nav-icon "></i> 
                    Secciones
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('paralelos.index')}}">
                    <i class="c-sidebar-nav-icon "></i> 
                    Paralelos
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('asignaturas.index')}}"> 
                    <i class=" c-sidebar-nav-icon"></i> 
                    Asignaturas
                </a>
            </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="widgets.html">
            <i class="c-sidebar-nav-icon cil-calculator"></i>  
            Widgets<span class="badge badge-info">NEW</span>
            </a>
        </li>

        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Extras</li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon cil-layers" ></i>
            Reportes
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="login.html" target="_top">
                <i class="c-sidebar-nav-icon cil-account-logout "></i>  
                Login
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="register.html" target="_top">
                <i class="c-sidebar-nav-icon cil-account-logout" ></i>  
                Register
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="404.html" target="_top">
                <i class="c-sidebar-nav-icon cil-bug" ></i>  
                Error 404
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="500.html" target="_top">
                <i class="c-sidebar-nav-icon cil-bug" ></i>  
                Error 500
                </a>
            </li>

            </ul>
        </li>

        <li class="c-sidebar-nav-item mt-auto">
            <a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="#" target="_top">
            <i class="c-sidebar-nav-icon cil-cloud-download"></i>  
            Egresados
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="#" target="_top">
            <i class="c-sidebar-nav-icon cil-layers"></i>  
            Ayuda
            </a>
        </li>

        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>

    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <i class=" cil-line-weight c-icon c-icon-lg "></i>
        </button>
        <a class="c-header-brand d-lg-none" href="{{'/'}}">
            <img width="118" height="46" src="{{asset('assets/brand/logo2.png')}}" alt="ITSGA Logo">
        </a>

        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <i class=" fas fa-list-ul  c-icon c-icon-lg "></i>
        </button>

    