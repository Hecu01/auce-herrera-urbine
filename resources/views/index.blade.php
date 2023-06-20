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
         {{-- <div class="container section-principal d-flex py-5 justify-content-center">
	
            <form class="g-3 align-items-center my-3 mr-3 p-3 col-4"  action="{{ route('cargar.carrera') }}"  method="POST" style="background: #fff; box-shadow: 0px 0px 3px #000">
               @csrf
               <h2 style="text-align: center;">Agregar Carrera</h2>
               <hr>
               <div class="" style="display: flex; justify-content: space-between; align-items:center; position: relative;">
            
                  <label class="custom-file-upload" style="text-align:center; margin:0px 30px; margin-right:20px;">
                     <input type="file" id="foto-aspirante" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
                     Subir foto
                  </label>
                  <div class="container d-flex justify-content-center" style="height: 130px;width:130px;  display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
                     <a href="#" type="button">
                        
                        <img id="imgPreview" style="height: 130px; width:130px;">
                        
                     </a>
                  </div>
       
              </div>
      
               <div class="col-12">
                  <div class="">
                     <div class="mt-2">
                        <div class="form-floating mb-2 mx-1" >
                           <input type="text" name="carrera" class="form-control" id="nombre_carr"  placeholder="name@example.com">
                           <label for="nombre_carr" >Nombre carrera (*)</label>
                        </div>
                        <div class="d-flex">
                           <div class="form-floating mb-2 mx-1" >
                              <input type="text" class="form-control" name="anios_duracion" id="dur_carr" placeholder="name@example.com">
                              <label for="dur_carr" >Años duracion (*)</label>
                           </div>
                           <div class="form-floating mb-2 mx-1" >
                              <input type="text" class="form-control" name="resolucion" id="resolucion" placeholder="name@example.com">
                              <label for="resolucion" >Resolución (*)</label>
                           </div>
                        </div>
                        <div class="mx-1">
                           <label for="descripcion_carr">Descripcion (*)</label>
                           <textarea name="descripcion" class="my-2 form-control" id="descripcion_carr" rows="4" placeholder="Una descripcion para la carrera a cargar." style="height:100px"></textarea>
                        </div>
  

                    </div>

                  </div>
               </div>
               @if (session('mensaje'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Enhorabuena!</strong> {{ session('mensaje') }}<br>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               @endif
               <div class="d-grid mx-1">
                  <input type="submit" value="Cargar carrera" class="btn btn-primary">
               </div>
            </form>
   
 
      
            
         </div> --}}
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="js/main.js"></script>
   </body>
</html>