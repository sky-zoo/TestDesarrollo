<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Pagina</title>
  </head>
  <body>

    <nav class="menu" id="menu">
      <div class="logo-empresa">
        <a href="#" class="logo">
          <img src="{{ asset('img/logo.svg') }}">
        </a>
      </div>
      <ul class="opciones">
        <li class="opciones-modelos activo">
          <a href="#">Modelos</a>
        </li>
        <li class="opciones-ficha no-activo">
          <a href="#">Ficha de modelo</a>
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
      <div class="fondo">
        
      </div>
      <nav class="menu-desplegable" id="menuDesplegable">
        <div class="claro" id="claro">
          <ul class="menu-opciones">
            <li class="opciones">
              <a href="#">Modelos</a>
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
    
    <main class="main">
      <div class="titulo">
        <h1>Descrubrí todos los modelos</h1>
      </div>

      <div class="catalogo">
        <div class="filtrar-ordenar">
          <div class="filtrar">
            <p>Filtrar por</p>
          </div>
          <ul class="categorias">
            <li class="activo">
              <a href="#">Todos</a>
            </li>

            <li>
              <a href="#">Autos</a>
            </li>

            <li>
              <a href="#">Pickups y Comerciales</a>
            </li>

            <li>
              <a href="#">SUVs y Crossovers</a>
            </li>
          </ul>
          <div class="ordenar">
            <button>
              Ordenar por <img src="{{ asset('img/flecha.svg') }}" alt="">
            </button>
            
          </div>
        </div>
        
        <div class="autos">
          <a href="#">
            <div class="auto">
              <div class="descripcion">
                <h3>Etios</h3>
                <p>2019 | $ 815.900</p>
              </div>
              <img src="{{ asset('img/coches/etios.png') }}" alt="">
            </div>
          </a>

          <a href="#">
            <div class="auto">
              <div class="descripcion">
                <h3>Yaris</h3>
                <p>2020 | $ 1.038.900</p>
              </div>
              <img src="{{ asset('img/coches/yaris.png') }}" alt="">
            </div>
          </a>

          <div class="auto">
            <div class="descripcion">
              <h3>Corolla</h3>
              <p>2018 | $ 1.430.700</p>
            </div>
            <img src="{{ asset('img/coches/corolla.png') }}" alt="">
          </div>
  
          <div class="auto">
            <div class="descripcion">
              <h3>Prius</h3>
              <p>2019 | $ 2.882.000</p>
            </div>
            <img src="{{ asset('img/coches/prius-1.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Camry</h3>
              <p>2018 | $ 3.753.200</p>
            </div>
            <img src="{{ asset('img/coches/camry.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Toyota 86</h3>
              <p>2019 | $ 3.812.100</p>
            </div>
            <img src="{{ asset('img/coches/toyota-86.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Innova</h3>
              <p>2020 | $ 2.596.400</p>
            </div>
            <img src="{{ asset('img/coches/innova.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>SW4</h3>
              <p>2019 | $ 3.236.200</p>
            </div>
            <img src="{{ asset('img/coches/sw-4.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>RAV4</h3>
              <p>2019 | $ 3.170.200</p>
            </div>
            <img src="{{ asset('img/coches/rav-4.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Land Cruiser Prado</h3>
              <p>2017 | $ 815.900</p>
            </div>
            <img src="{{ asset('img/coches/prado.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Land Cruiser 200</h3>
              <p>2018 | $ 7.873.100</p>
            </div>
            <img src="{{ asset('img/coches/cruiser.png') }}" alt="">
          </div>

          <div class="auto">
            <div class="descripcion">
              <h3>Hilux</h3>
              <p>2020 | $ 1.507.000</p>
            </div>
            <img src="{{ asset('img/coches/hilux.png') }}" alt="">
          </div>
        </div>

      </div>
    </main>

    <footer>
      <!-- Acá va el fondo -->
    </footer>
    
  </body>
  <script src=" {{ asset('js/main.js') }} "></script>
</html>