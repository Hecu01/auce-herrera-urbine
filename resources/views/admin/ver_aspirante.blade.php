<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/png" href="{{ asset('/img/logo1.png') }}">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <meta name="author" content="3° Año Análisis de Sistemas">

      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Styles -->
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="js/main2.js"></script>     
      <title>ISFT 38 - REGISTRADO</title>
   </head>
   <body style="">
      <style>
         li{
            padding: 0px;
            margin: 0px;
         }
      </style>
      <div class="container d-flex mt-2" style="flex-direction: row">

         <div class="row">
            <article class="" style="width: 290px">
               <div class="d-flex" style="height: 200px ;">
                  <img src="{{url('foto/'. $registro->foto) }}" style="width: auto;" draggable="false">
               </div>

               
               <select style="display: none" disabled class="form-select form-select-sm  btn-danger" style="cursor: pointer"   id="carrera_a_estudiar" name="carrera_elegida_aspirante" >


                  @foreach ($carreras as $carrera)
                     <option value="{{ $carrera->id }}" {{ $registro->carrera_id == $carrera->id ? 'selected' : '' }} >
                        {{ $carrera->descripcion }}   
                        {{ $registro->carrera_id == $carrera->id ? $variable=$carrera->descripcion : '' }}
                     </option>
                  @endforeach
                  
                  
               </select>
               <div class="alert alert-success" role="alert" style="width:267px">
                  <h4 class="alert-heading">Carrera Elegida</h4>
                  <p>{{$variable}} </p>
               </div>





               <div class="" style="border-top: 2px solid rgb(0,0,0,0.3); ">
                  <h4 style="margin-top: 5px">Datos personales</h4>
                  <ul>
                     <li><strong> Nombres</strong>: {{ $registro->nombre }}</li>
                     <li><strong> Apellidos</strong>: {{ $registro->apellido }}</li>
                     <li><strong>Estado civil</strong>: {{ $registro->est_civil }}</li>
                     <li><strong> Sexo</strong>: {{ $registro->sexo }}</li>
                     <li><strong> DNI</strong>: {{ $registro->dni }}</li>
                     <li><strong> CUIL</strong>: {{ $registro->cuil }}</li>
                  </ul>
               </div>

            </article>

            <article class=""style="width: 350px; margin:0px 10px">

               <div class=""style="border-top: 2px solid rgb(0,0,0,0.3);">
                  <h4 >Datos de nacimiento</h4>
                  <ul>
                     <li><strong> Ciudad</strong>: {{ $registro->ciudad }}</li>
                     <li><strong> Provincia</strong>: {{ $registro->provincia }}</li>
                     <li><strong>Pais</strong>: {{ $registro->nacionalidad }}</li>
                     <li><strong> Fecha nacimiento</strong>: {{ $registro->fec_nac }}</li>

                  </ul>
               </div>

               <div class=""style="border-top: 2px solid rgb(0,0,0,0.3);">
                  <h4 >Datos de residencia</h4>
                  <ul>
                     <li><strong>Domicilio</strong>: {{ $registro->domicilio }}</li>
                     <li><strong>Barrio</strong>: {{ $registro->barrio }}</li>
                     <li><strong>Ciudad</strong>: {{ $registro->ciudad }}</li>
                     <li><strong>Provincia</strong>: {{ $registro->provincia }}</li>
                     <li><strong>Código Postal</strong>: {{ $registro->cod_postal }}</li>
                  </ul>
               </div>


               <div class=""style="border-top: 2px solid rgb(0,0,0,0.3); ">
                  <h4 >Datos académicos</h4>
                  <ul>
                     <li><strong>Titulo secundario</strong>: {{ $registro->titulo_intermedio }}</li>
                     <li><strong>Escuela de egreso</strong>: {{ $registro->escuela_egreso }}</li>
                     <li><strong>Año Egreso</strong>: {{ $registro->año_egreso }}</li>
                     <li><strong>Ciudad</strong>: {{ $registro->distrito_egreso }}</li>
                  </ul>

               </div>



            </article>

            <article class=""style="width: 290px">
               <div class="" style="border-top: 2px solid rgb(0,0,0,0.3); ">
                  <h4 >Datos de contacto</h4>
                  <ul>
                     <li><strong>Correo electrónico</strong>: {{ $registro->email }}</li>
                     <li><strong>Celular</strong>: {{ $registro->celular }}</li>
                     <li><strong>Tel fijo</strong>: {{ $registro->tel_fijo }}</li>
                     <li><strong>Tel alternativo</strong>: {{ $registro->tel_alternativo }} <br>(Pertenece a: <b>{{ $registro->pertenece_a }}</b>)</li>

                  </ul>
               </div>
               <div class="" style="border-top: 2px solid rgb(0,0,0,0.3); ">
                  <h4 class="">Preguntas</h4>
                  <ul>
                     <li>
                        <strong>Tiene familiares a cargo</strong>:
                        @if($registro->fam_a_cargo == true)
                           Sí
                        @else
                           No
                        @endif
                     </li>
                     <li>
                        <strong>Tiene hijos</strong>:
                        @if($registro->hijos == true)
                           Sí
                        @else
                           No
                        @endif
                     </li>
                     <li>
                        <strong>Obra Social</strong>: 
                        @if($registro->obra_social == true)
                           Sí
                        @else
                           No
                        @endif
                     </li>

                     <li>
                        <strong>Trabaja</strong>: 
                        @if($registro->trabaja == true)
                           Sí ({{$registro->horario_trabajo}}) <br> ({{$registro->actividad_trabajo}})

                        @else
                           No
                        @endif
                     </li>
                  </ul>
               </div>


              
            </article>
         </div>
         <nav class="d-flex "  style="flex-direction: column-reverse; align-content:center; justify-content:center; margin-left:25px">
            <a href="{{ route('ir_admin') }}" class="btn btn-secondary" style="height: 45px">Regresar</a>
            <li class="nav-item dropdown" style="list-style: none">
               <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-success" style=" display:flex; justify-content: flex-end; color:#fff;"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  Admin: {{ Auth::user()->name }}
               </a>

               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
               </div>
            </li>

         </nav>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="js/main.js"></script>     
        <script src="https://unpkg.com/scrollreveal"></script>
   </body>
</html>