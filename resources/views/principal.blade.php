<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Educont</title>
  </head>
  <body>
  
<div class="bg-warning"> 
  <nav class="navbar navbar-light" style="background-color: #E1E8D8; height:170px; font-family: Times New Roman;
  font-size:25px"  >
 <ul class="nav nav-pills nav-fill" >
  <li class="nav-item">
    <a class="nav-link" href="#" style="color:black"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color:black"></a>
  </li>
  </nav>
</div>
<div>
<nav class="navbar navbar-light" style="background-color: #000603; width:100%; height:70px; font-family: Times New Roman;
font-size:20px">
 <ul class="nav nav-pills nav-fill"  >
  <li class="nav-item"  >
    <a class="nav-link" href="#" style="color: white" >Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: white">Universidad</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: white">Especializate con Nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: white">Bienestar Universitario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: white">Contáctanos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"></a>
    
  </li>
</ul>
</nav>

</div>



    <div class="container">
    @include('flash::message')
    @yield('secciones')
    @yield('seccion_edit')
    </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
