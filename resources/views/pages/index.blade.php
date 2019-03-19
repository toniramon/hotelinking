@extends('layouts.app')

@section('content')
    <div class="jumbotron text-justify">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead spacing">Bienvenido a nuestra página web de cupones. En este sitio
            encontrarás los mejores descuentos aplicables.</p>
        <p class="lead">Disponemos de descuentos para la mayoría de las grandes marcas,
            este incluye Nike, Reebook, Levi's y muchos más! Todos los descuentos
            tienen una descripción con las indicaciones de cómo aplicar dichos descuentos
            y poner beneficiarte en la máxima medida posible de las ofertas realizadas
            por parte de estas marcas.</p>

        <div>
            <img class="rounded img-fluid mx-auto d-block spacing" src="{{ URL::to('/') }}/images/cupones_400.jpg">
        </div>

    @guest
        <p class="lead text-center spacing">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Iniciar Sesión</a>

        @if (Route::has('register'))
            <a class="btn btn-success btn-lg" href="/register" role="button">Registrar</a>
        @endif
        </p>
    @else
        <div class="row">
            <div class="col">
                <p class="lead text-center spacing">
                    ¡Bienvenido <span>{{ Auth::user()->name }}</span>! Puedes acceder a
                    <a class="btn btn-primary" href="/dashboard" role="button">Mi Panel</a>
                </p>
                <p class="lead text-center spacing">
                    O también puedes acceder al listado de <a class="btn btn-success" href="/coupons" role="button">Cupones</a>
                </p>
            </div>
        </div>
    @endguest
    </div>
@stop
