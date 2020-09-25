@extends('plantilla')

@section('hojas-estilo')
<link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
<link rel="stylesheet" href="{{ asset('css/estilosFichaModelo.css') }}">
@endsection

@section('seccion-activa')
<li class="opciones-modelos no-activo">
    <a href="{{ route('home') }}">Modelos</a>
</li>
<li class="opciones-ficha activo">
    <a href="#">Ficha de modelo</a>
</li>
@endsection

@section('contenido')
    <div class="caja-presentacion">
        <div class="presentacion">
            <div class="imagen">
            <img src=" {{ asset('img/coches/x3/' . $auto['img_auto'] . '.png') }} " alt="">
            </div>
            <div class="detalles">
                <h1 class="nombre-auto"> {{ $auto['nombre_auto'] }} </h1>
                <div class="descripcion-auto">
                    <p class="titulo">Preparada para cualquier desafío</p>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ipsa voluptatibus voluptatem, excepturi modi, quaerat nemo
                    itaque quo, dolorum voluptas error voluptates velit neque sed
                    rerum? Velit dolor veritatis natus totam.</p>
                </div>
            </div>
        </div>

        <div class="caracteristicas-auto">
            <ul class="lista-caracteristicas">
                
                <li class="item">
                    <img src="{{ asset('img/caracteristicas/0.png') }}" alt="">
                </li>
                <div class="pasar-izquierda">
                    <button>
                        <img src="{{ asset('img/flecha-izq.svg') }}" alt="">
                    </button>
                </div>
                <li class="item">
                    <div class="item-caja"> 
                        <img src="{{ asset('img/caracteristicas/1.png') }}" alt="">
                        <b>Nuevo motores Toyota</b>
                        <p>
                            Dos alternativas diesel con turbo de
                            geometría variable, 1GD (2.8 L) y 2GD (2.4 L).
                        </p>
                    </div>
                </li>

                <li class="item">
                    <div class="item-caja">
                        <img src="{{ asset('img/caracteristicas/2.png') }}" alt="">
                        <b>Suspensión mejorada</b>
                        <p>
                        Mayor confort de marcha, estabilidad y capacidad Off Road.
                        </p>
                    </div>
                </li>

                <li class="item">
                    <div class="item-caja">
                        <img src="{{ asset('img/caracteristicas/3.png') }}" alt="">
                        <b>Transmisión automática</b>
                        <p>
                        Posibilidad de elección de caja automática de  manejo.
                        </p>
                    </div>
                </li>

                <li class="item">
                    <div class="item-caja">
                        <img src="{{ asset('img/caracteristicas/4.png') }}" alt="">
                        <b>Transmisión manual</b>
                        <p>
                        Posibilidad de elección de caja automática de  manejo.
                        </p>
                    </div>
                </li>

                <div class="pasar-derecha">
                    <button>
                        <img src="{{ asset('img/flecha-der.svg') }}" alt="">
                    </button>
                </div>

                <li class="item">
                    <img src=" {{ asset('img/caracteristicas/5.png') }} " alt="">
                </li>
            </ul>
        </div>

        <div class="especialidades-auto">
            <div class="texto">
                <div>
                    <h2>Titulo de 20px</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fuga maxime aliquam, autem perferendis cum architecto non,quam,
                    voluptate ex sequi mollitia deserunt velit voluptatem!
                    Quam ipsum fugiat ducimus modi harum!</p>
                </div>
            </div>

            <div class="imagen">
                <img src="{{ asset('img/especialidades/1.png') }}" alt="">
            </div>

            <div class="imagen">
                <img src="{{ asset('img/especialidades/2.png') }}" alt="">
            </div>

            <div class="texto">
                <div>
                    <h2>Titulo de 20px</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fuga maxime aliquam, autem perferendis cum architecto non,quam,
                    voluptate ex sequi mollitia deserunt velit voluptatem!
                    Quam ipsum fugiat ducimus modi harum!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts-js')
<script type="module" src="{{ asset('js/menu.js')}}"></script>
@endsection