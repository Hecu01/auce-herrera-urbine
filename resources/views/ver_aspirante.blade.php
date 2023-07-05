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
        <div class="container">
            <p>Nombre: {{ $registro->nombre }}</p>  
            <p>Apellido: {{ $registro->apellido }}</p>
            <p>Apellido: {{ $registro->dni }}</p>
            <img src="../{{ $registro->foto }}" alt="Foto aspirante" width="70px" height="70px">
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="js/main.js"></script>     
        <script src="https://unpkg.com/scrollreveal"></script>
   </body>
</html>