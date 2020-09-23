@extends('plantilla')

@section('hojas-estilo')
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@endsection

@section('seccion-activa')
      <li class="opciones-modelos activo">
        <a href="{{ route('home') }}">Modelos</a>
      </li>
      <li class="opciones-ficha no-activo">
        <a href="#">Ficha de modelo</a>
      </li>
@endsection

@section('contenido')
  <main class="main">
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
      @foreach($autos as $item)
        <li class="auto">
          <a href=" {{ route('fichaModelo', ['idAuto'=>$item['id'] ]) }} " class="link-modelo">
            <div class="descripcion">
              <h3>{{ $item['nombre_auto'] }}</h3>
              <p> {{ $item['anio'] }} | $ {{ number_format($item['precio'], 0, ",", ".") }} </p>
            </div>
            <div class="imagen">
              <img src=" {{ asset('img/coches/x1/' . $item['img_auto'] . '.png') }} ">
            </div>
          </a>
        </li>
      @endforeach
        <a href="#" class="ver-modelo" id="verModelo">
          <img id="verModeloIMG" src="{{ asset('img/ver-modelo.svg') }}" alt="">
        </a>
      </ul>

    </div>
  </main>
@endsection