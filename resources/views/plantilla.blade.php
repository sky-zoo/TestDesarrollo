<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Pagina</title>
  </head>
  <body>

    <nav class="menu" id="menu">
      <div class="logo-empresa">
        <a href="{{ route('home') }}" class="logo">
          <img src="{{ asset('img/logo.svg') }}">
        </a>
      </div>
      <ul class="opciones">
        <li class="opciones-modelos activo">
          <a href="{{ route('home') }}">Modelos</a>
        </li>
        <li class="opciones-ficha no-activo">
          <a href="{{ route('fichaModelo') }}">Ficha de modelo</a>
        </li>
      </ul>
      <div class="boton-menu-desplegable">
        <p>Menú</p>
        <button class="boton-menu" id="botonMenu">
          <img src="{{ asset('img/menu.svg') }}">
        </button>
      </div>
    </nav>

    <div class="fondo-menu" id="fondoMenu">
      <nav class="menu-desplegable" id="menuDesplegable">
        <div class="claro" id="claro">
          <ul class="menu-opciones">
            <li class="opciones">
              <a href="{{ route('home') }}">Modelos</a>
            </li>

            <li class="opciones">
              <a href="#">Servicios y Accesorios</a>
            </li>

            <li class="opciones">
              <a href="#">Financiación</a>
            </li>

            <li class="opciones">
              <a href="#">Reviews y Comunidad</a>
            </li>
          </ul>
          <ul class="menu-opciones">
            <li class="opciones">
              <a href="#">Toyota Mobility Service</a>
            </li>

            <li class="opciones">
              <a href="#">Toyota Gazoo Racing</a>
            </li>

            <li class="opciones">
              <a href="#">Toyota Híbridos</a>
            </li>
          </ul>
          <ul class="menu-opciones">
            <li class="opciones">
              <a href="#">Concesionarios</a>
            </li>

            <li class="opciones">
              <a href="#">Test Drive</a>
            </li>

            <li class="opciones">
              <a href="#">Contacto</a>
            </li>
          </ul>
        </div>
          
        <div class="oscuro" id="oscuro">
          <ul class="menu-opciones">
            <li class="opciones">
              <a href="#">Actividades</a>
            </li>

            <li class="opciones">
              <a href="#">Servicios al Cliente</a>
            </li>

            <li class="opciones">
              <a href="#">Ventas Especiales</a>
            </li>

            <li class="opciones">
              <a href="#">Innovación</a>
            </li>

            <li class="opciones">
              <a href="#">Prensa</a>
            </li>

            <li class="opciones">
              <a href="#">Acerca de...</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
    <main class="main" style="border:1px red solid;">
      @yield('contenido')
    </main>
    <footer>
      
    </footer>
    
  </body>
  <script src=" {{ asset('js/main.js') }} "></script>
</html>