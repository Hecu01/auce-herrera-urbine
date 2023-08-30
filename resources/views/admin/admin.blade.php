<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="{{ asset('/img/logo1.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <meta name="author" content="3° Año Análisis de Sistemas">
        <meta name="description" content="Realizado por Herrera, Urbine y Auce, es un prediseño de formulario de inscripcion a la facultad.">

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="js/main2.js"></script>     
        <title>ISFT 38 - INSCRIPCION</title>
   </head>
   <body style="background: rgba(0, 0, 0, 0.363)">
        <div class="container-fluid">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <div class="d-flex justify-content-center mb-2" >
                        <nav >
                            <li class="nav-item dropdown" style="list-style: none">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-success" style="display:flex; justify-content: flex-end; color:#fff;"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin: {{ Auth::user()->name }}
                            </a>
            
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('inscripcion') }}">
                                    {{ __('Inscripción') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('ir_admin') }}">
                                    {{ __('Administración') }}
                                </a>
                                <hr style="margin: 3px 0px; padding: 0;">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    </form>
                                </div>
                            </li>
            
                        </nav>
        
                    </div>
     
                @endguest
            </ul>
            <h1>Inscripciones</h1>
            @if (session('mensaje2'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Atención!</strong> {{ session('mensaje2') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @include('partials/admin/tabla_registros') 
        </div>

            

 
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

        <script src="js/main.js"></script>        
        <script src="js/admin.js"></script>     
        <script src="https://unpkg.com/scrollreveal"></script>
   </body>
</html>