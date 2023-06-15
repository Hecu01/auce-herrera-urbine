<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <meta name="author" content="3° Año Análisis de Sistemas">

      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Styles -->
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body style="background-color: #00000079; ">
      
      <div class="container">
         <!-- <h1>formulario de Inscripcion</h1> -->
         <br>

         <form id="form_wrapper" class="form_wrapper">

            <!-- Primer primer formulario 1X-->
            <div class="login en-comun not-display" >
               <?php include('partials/1_primer_primer_formulario.php');?>
           </div>

            <!-- Primer formulario 2X-->
            <div class="register0 active en-comun ">
               <?php include('partials/2_primer_formulario.php');?>
            </div>
            <!-- Segundo formulario 3X-->
            <div class="register1 not-display en-comun">
               <?php include('partials/3_segundo_formulario.php');?>
            </div>

            <!-- Tercer formulario 4X-->
            <div class="register2 not-display en-comun" >
               <?php include('partials/4_tercer_formulario.php');?>
            </div>

            <!-- Cuarto formulario 5X-->
            <div class="register3 not-display en-comun">
               <?php include('partials/5_cuarto_formulario.php');?>
            </div>

            <!-- Explicacion1 6X-->
            <div class="register4 en-comun not-display" >
               <?php include('partials/6_explicacion1.php');?>
            </div>

            <!-- Quinto formulario formulario 7X-->
            <div class="register5 not-display en-comun">
               <?php include('partials/7_quinto_formulario.php');?>
            </div>     

            <!-- pregunta otro estudio n°1--- 8X-->
            <div class="pregunta1 en-comun not-display" >
               <?php include('partials/8_preg_otro_estudio1.php');?>
            </div>
            <!-- si estudio1 9X-->
            <div class="si-otro-estudio1 en-comun not-display" >
               <?php include('partials/9_estudio_ad1.php');?>
            </div> 

            <!-- pregunta otro estudio n°2--- 10X-->
            <div class="pregunta2 en-comun not-display">
               <?php include('partials/10_preg_otro_estudio2.php');?> 
            </div> 

            <!-- si estudio2 11-->
            <div class="si-otro-estudio2 en-comun not-display">
               <?php include('partials/11_estudio_ad2.php');?> 
            </div>

            <!-- lo ultimo_ad_1_2 12-->
            <div class="lo-ultimo-ad-1-2 en-comun not-display">
               <?php include('partials/12_lo_ultimo_ad_1_2.php');?> 
            </div>
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="js/main.js"></script>
   </body>
</html>