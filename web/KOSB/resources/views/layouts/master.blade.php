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
          
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #00ADB5; >
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: #02475E;" >Busca tu Trabajo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('buscar_trabajo')}}">Buscar Trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light"  href="{{route('crear_publicacion')}}">Crear Publicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light"  href="{{route('crear_perfil')}}">Perfil</a>
                    </li>
                    </ul>

                    
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
                            <h2 style="color: #8f8f8f">Informacion De La Compañia</h2>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/ bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('javascript/axios_config.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('javascript/publicacion.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @yield("javascript")


    </body>



</html>