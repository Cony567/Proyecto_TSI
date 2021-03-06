<!doctype html>


<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}"> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Bootstrap CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/components/navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylebuscar.css')}}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    <!-- Google  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    
    
    <title>KOSB Trabajos</title>

  </head>


<!--#DDCAD9-->
  <body style="background: #f2efea">


    <header><!-- Nav Bar-->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        soporte.buscartrabajo@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +56986439424
                    </div>
                </div>
            </div>
        </div>
          

        <nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light" style="background: #00ADB5;">
            <div class="flex container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="{{route('home')}}" style="color: #02475E;">Buscar Trabajo</a>
              <div class="flex collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('buscar_trabajo')}}">Buscar Trabajo</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-light"  href="{{route('crear_publicacion')}}">Crear Publicacion</a>
                            </li>
                        @endauth
                        
                        <li class="nav-item">
                            @auth
                                <a class="nav-link text-light" href="{{route('perfil')}}">Perfil</a>
                            @else
                                <a class="nav-link text-light" href="{{route('crear_perfil')}}">Perfil</a>
                            @endauth

                        </li>
                        </ul>
                </ul>
                <div class="dropdown ms-3">
                    <button class="btn btn-bd-light dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                        @auth
                            <span class="d-none d-lg-inline">{{ Auth::user()->email }}</span>
                        @else
                            <span class="d-none d-lg-inline">Bienvenido</span>
                        @endauth
                        
                    </button>
                    <!--
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><a :href="route('logout')"></a></li>
                            
                        </form>
                            
                        @else
                        <li><a class="dropdown-item current" aria-current="true" href="{{route('crear_perfil')}}">Inicie Seci??n o Reg??strese</a></li>
                        @endauth
                      
                        <li><hr class="dropdown-divider"></li>
                    </ul>-->
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                @auth
                                    <div>{{ Auth::user()->name }}</div>
                                @else
                                    <div>Bienvenido!!</div>
                                @endauth
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Authentication -->
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Cierre Sesi??n') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('crear_perfil')">
                                    {{ __('Inicie Seci??n o Reg??strese') }}
                                </x-dropdown-link>
                            @endauth
                            
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="dropdown ms-3">
                    
        
                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>   
                
            
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                        @auth
                            <li><a class="dropdown-item current" aria-current="true" href="#">{{Auth::user()->name}}</a></li>
                        @else
                            <li><a class="dropdown-item current" aria-current="true" href="#">Bienvenido</a></li>
                        @endauth
                      
                      <li><hr class="dropdown-divider"></li>
                      @guest
                        <li><a class="dropdown-item" href="#">Inicio Sesi??n/Registro</a></li>
                      @endguest
                      
                      @auth
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/docs/versions/">Cerrar Sesi??n</a></li>
                        
                      @endauth
                      
                    </ul>
                    
                </div>
                
              </div>
            </div>
          </nav>
    </header>


    <main class="container-fluid" >

        @yield("contenido")

    </main>

    <footer class="footer-base" id="footer-principal">
        <div class="footer background-dark bottom-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget" style="color: #8f8f8f">
                            <h2>Contactanos</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Direccion</p>
                                <p><i class="fa fa-envelope"></i>soporte.buscartrabajo@email.com</p>
                                <p><i class="fa fa-phone"></i>+56986439424</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget" style="color: #8f8f8f">
                            <h2>Redes Sociales</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2 style="color: #8f8f8f">Informacion De La Compa??ia</h2>
                            <ul>
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Politica De Privacidad</a></li>
                                <li><a href="#">Terminos Y Condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Scripts -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield("javascript")

    </body>



</html>