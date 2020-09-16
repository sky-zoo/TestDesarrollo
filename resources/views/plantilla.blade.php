<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../resources/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Pagina</title>
  </head>
  <body>

    <nav class="navbar navbar-light border-bottom position-relative">
        <a href="#" class="navbar-brand">
          <img src="{{ asset('img/logo.svg') }}" alt="logo">
        </a>

        <ul class="navbar-nav d-none d-sm-flex flex-row">
          <li class="nav-item mr-5 active">
            <a href="{{ route('modelos') }}" class="nav-link">Modelos</a>
          </li>
          <li class="nav-item">
            <a href=" {{ route('fichaModelo') }} " class="nav-link">Ficha de modelo</a>
          </li>
        </ul>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Abrir navegacion">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="navbar-collapse collapse row position-absolute w-100 mx-0" id="menu">
      <div class="col-xl-9 bg-success">
      
      </div>

      <nav class="navbar navbar-light col-xl-3 mx-0 bg-light">
        <ul class="navbar-nav text-right w-100 border-bottom">
          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Modelos</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Servicios y Accesorios</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Financiación</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Reviews y Comunidad</a>
          </li>
        </ul>

        <ul class="navbar-nav text-right w-100 bg-light my-2 border-bottom">
          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Toyota Mobility Service</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Toyota Gazoo Racing</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Toyota Híbridos</a>
          </li>
        </ul>

        <ul class="navbar-nav text-right w-100 bg-light mb-2 border-bottom">
          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Concesionarios</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Test Drive</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Contacto</a>
          </li>
        </ul>

        <ul class="navbar-nav text-right w-100">
          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Actividades</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Servicios al Cliente</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Ventas Especiales</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Innovación</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Prensa</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link p-1" style="font-size:25px;">Acerca de...</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="container border border-primary bg-success h-50">
        <!-- @yield('seccion') -->
        <h1 class="display-4 font-weight-bolder">Descubrí todos los modelos</h1>
    </div>
    <div class="container-fluid bg bg-dark"></div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../resources/js/main.js"></script>
  </body>
</html>