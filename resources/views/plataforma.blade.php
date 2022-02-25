@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'plataformas')
@section('content')

<h1 class="titulo-juegos">Juegos  {{$nombre_plataforma}}</h1>
<div class="div-juegos">
            @foreach($plataforma as $juego)
            <div class="card-juego">
                <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                <div class="cuerpo-card">
                    <h4>{{$juego->nombre_juego}}</h4>
                    <p>Vendedor: </p>
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: {{$juego->precio}} €</p>
                    <a href="#" class="boton-comprar">comprar</a>
                </div>
            </div>
            @endforeach
</div>
<div class="paginacion">{{$plataforma->links()}}</div>  
@endsection