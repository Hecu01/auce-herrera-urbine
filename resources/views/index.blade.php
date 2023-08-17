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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <!-- Styles -->
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="js/main2.js"></script>     
      <title>ISFT 38 - INSCRIPCION</title>
   </head>
   <body style="background: rgba(0, 0, 0, 0.363)">
      <div class="container">
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
                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                        </form>
                     </div>
                  </li>
            @endguest
         </ul>
         {{-- @include('partials/tabla_registros') --}} 

         
         @if (session('mensaje2'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Atención!</strong> {{ session('mensaje2') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         @if (session('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Atención!</strong> {{ session('mensaje') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif 
         <form id="form_wrapper" class="form_wrapper" enctype="multipart/form-data"  method="POST" action="{{ route('registrar') }}" >
            @csrf
            <!-- Bienvenida 1_primer_primer [ACTIVE]...-->
            @include('partials/1_primer_primer_formulario') 

            <!-- Datos personales [1/5] 2_primer...-->
            @include('partials/2_primer_formulario')

            
            <!-- Datos personales [2/5] 3_segund...-->
            @include('partials/3_segundo_formulario')

            <!-- Datos personales [3/5] 3_segund...-->
            @include("partials/3'_segundo_formulario")


            <!-- Datos personales [4/5] 4_terc...-->   
            @include('partials/4_tercer_formulario')

            <!-- Datos personales [5/5] 5_cuart...-->   
            @include('partials/5_cuarto_formulario')

            <!-- Explicacion1 6_expl..-->
            @include('partials/6_explicacion1')

            <!-- Datos académicos [1/1] 7_quint...-->         
            @include('partials/7_quinto_formulario')
            

            <!-- Ya casi terminamos... 9_estudio_ad1...-->   
            @include('partials/9_estudio_ad1')


            <!-- Ya casi terminamos... 11_estudio_ad2...-->   
            @include('partials/11_estudio_ad2')


            <!-- Lo ultimoo - datos laborales...-->   
            @include('partials/13_datos_laborales')
 
            @include('partials/15_finalizando_la_inscripcion')
         </form>
 
            <div class="container section-principal d-flex py-5 justify-content-center">

               
               {{-- @include('partials/cargar_carrera') --}}
      
               <!-- Cargar Asignatura -->
               {{-- @include('partials/cargar_asignatura')  --}}
         
            
            </div>  

         
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="js/main.js"></script>     
      <script src="https://unpkg.com/scrollreveal"></script>

   </body>
</html>