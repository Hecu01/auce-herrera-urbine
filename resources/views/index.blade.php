<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>ISFT 38 - INSCRIPCION</title>
      <link rel="shortcut icon" type="image/png" href="{{ asset('/img/logo1.png') }}">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <meta name="author" content="3° Año Análisis de Sistemas">

      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Styles -->
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
   <body style="background: rgba(0, 0, 0, 0.363)">
      
      <div class="container">
         <!-- <h1>formulario de Inscripcion</h1> -->
         <br>

         <form id="form_wrapper" class="form_wrapper needs-validation" >

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
            
            <!-- Ya casi terminamos... 8_preg_otr ...-->      
            @include('partials/8_preg_otro_estudio1')

            <!-- Ya casi terminamos... 9_estudio_ad1...-->   
            @include('partials/9_estudio_ad1')

            <!-- Ya casi terminamos... 10_preg_otr...-->      
            @include('partials/10_preg_otro_estudio2')
            
            <!-- Ya casi terminamos... 11_estudio_ad2...-->   
            @include('partials/11_estudio_ad2')

            <!-- Ya casi terminamos... 12_datos_lab_con_2_estudios...-->   
            @include('partials/12_datos_lab_con_2_estudios')
            
            <!-- Ya casi terminamos... 13_datos_lab_sin_estudios...-->   
            @include('partials/13_datos_lab_sin_estudios')
            
            <!-- Ya casi terminamos... 14_datos_lab_con_1_estudio [ACTIVE]...-->   
            @include('partials/14_datos_lab_con_1_estudio')

            <!-- Ya casi terminamos... 15_datos_lab_sin_estudios...-->   
            @include('partials/15_finalizando_la_inscripcion')

         </form>
         {{--          <div class="container section-principal d-flex py-5 justify-content-center">

	         Cargar Carrera 
            @include('partials/cargar_carrera') --}}
   
           <!-- Cargar Asignatura -->
            {{-- @include('partials/cargar_asignatura') 
      
            
         </div>  --}}
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="js/main.js"></script>     
      <script src="https://unpkg.com/scrollreveal"></script>

   </body>
</html>