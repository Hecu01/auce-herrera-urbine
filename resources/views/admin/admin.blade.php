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

        
        <!-- Datatables injected-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <script src="cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <!-- Styles -->
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="js/main2.js"></script>     
        <title>ISFT 38 - INSCRIPCION</title>
   </head>
   <body style="background: #fff;">
        <div class="container-fluid " style="background: #fff;">
            
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

            @if (session('mensaje2'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Atención!</strong> {{ session('mensaje2') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                       <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pre-Inscriptos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                       <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Documentacion</button>
                    </li>
                    <li class="nav-item" role="presentation">
                       <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Entregado</button>
                    </li>
                 </ul>
                 <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       <h3>Pre-inscriptos</h3>
                       @include('partials/admin/tabla_registros') 
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <h3>Falta Entregar</h3>
              
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       <h3>Finalizados</h3>
              
                    </div>
                 </div>

            </div>
        </div>

            

        {{-- <script>
            $(document).ready(function(){
                var tabla_registros = $('#tabla-registros').Datatables({
                    processing:true,
                    serverSide:true,
                    ajax:{
                        url: "{{route('ir_admin')}}",
                    },
                    columns:[
                        {}
                    ]
                });
            })
        </script> --}}
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script src="js/main.js"></script>        
        <script src="js/admin.js"></script>     
        <script src="https://unpkg.com/scrollreveal"></script>
   </body>
</html>