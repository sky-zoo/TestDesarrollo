@extends('plantilla')

@section('contenido')
<div class="titulo">
        <h1>Descubrí todos los modelos</h1>
      </div>

      <div class="catalogo">
        <div class="filtrar-ordenar">
          <div class="filtrar">
            <p>Filtrar por <img src="{{ asset('img/flecha.svg') }}" alt=""> </p>
          </div>
          <ul class="categorias" id="categorias">
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
          <div class="ordenar" id="ordenar">
            <button>
              Ordenar por <img src="{{ asset('img/flecha.svg') }}" alt="">
            </button>
            <div class="menu-ordenar">
              <ul class="opciones-ordenar">
                <li class="opcion activo">
                  <a href="#">Nada</a>
                </li>

                <li class="opcion">
                  <a href="#">De <b>menor</b> a <b>mayor</b> precio</a>
                </li>
                
                <li class="opcion">
                  <a href="#">De <b>mayor</b> a <b>menor</b> precio</a>
                </li>

                <li class="opcion">
                  <a href="#">Más <b>nuevos</b> primero</a>
                </li>

                <li class="opcion">
                  <a href="#">Más <b>viejos</b> primero</a>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
        
        <ul class="autos">
          <li class="auto">
            <a href="#etios" class="link-modelo">
              <div class="descripcion">
                <h3>Etios</h3>
                <p>2019 | $ 815.900</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/etios.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#yaris" class="link-modelo">
              <div class="descripcion">
                <h3>Yaris</h3>
                <p>2020 | $ 1.038.900</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/yaris.png') }}" alt="">
              </div>
            </a>
            <!-- <a href="#" class="ver-modelo">
              <img src="{{ asset('img/ver-modelo.svg') }}" alt="">
            </a> -->
          </li>

          <li class="auto">
            <a href="#corolla" class="link-modelo">
              <div class="descripcion">
                <h3>Corolla</h3>
                <p>2018 | $ 1.430.700</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/corolla.png') }}" alt="">
              </div>
            </a>
            <!-- <a href="#" class="ver-modelo">
              <img src="{{ asset('img/ver-modelo.svg') }}" alt="">
            </a> -->
          </li>
  
          <li class="auto">
            <a href="#prius" class="link-modelo">
              <div class="descripcion">
                <h3>Prius</h3>
                <p>2019 | $ 2.882.000</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/prius-1.png') }}" alt="">
              </div>
            </a>
            <!-- <a href="#" class="ver-modelo">
              <img src="{{ asset('img/ver-modelo.svg') }}" alt="">
            </a> -->
          </li>
          <a href="#" class="ver-modelo" id="verModelo">
            <img id="verModeloIMG" src="{{ asset('img/ver-modelo.svg') }}" alt="">
          </a>
        </ul>

        <ul class="autos">
          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Camry</h3>
                <p>2018 | $ 3.753.200</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/camry.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Toyota 86</h3>
                <p>2019 | $ 3.812.100</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/toyota-86.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Innova</h3>
                <p>2020 | $ 2.596.400</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/innova.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>SW4</h3>
                <p>2019 | $ 3.236.200</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/sw-4.png') }}" alt="">
              </div>
            </a>
          </li>
        </ul>

        <ul class="autos">
          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>RAV4</h3>
                <p>2019 | $ 3.170.200</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/rav-4.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Land Cruiser Prado</h3>
                <p>2017 | $ 815.900</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/prado.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Land Cruiser 200</h3>
                <p>2018 | $ 7.873.100</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/cruiser.png') }}" alt="">
              </div>
            </a>
          </li>

          <li class="auto">
            <a href="#" class="link-modelo">
              <div class="descripcion">
                <h3>Hilux</h3>
                <p>2020 | $ 1.507.000</p>
              </div>
              <div class="imagen">
                <img src="{{ asset('img/coches/hilux.png') }}" alt="">
              </div>
            </a>
          </li>
        </ul>

      </div>
@endsection