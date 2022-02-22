@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'juegos')
@section('content')

<h1 class="titulo-juegos">Juegos más recientes</h1>
<div class="div-juegos">
            @foreach($juegos as $juego)
            <div class="card-juego">
                <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                <div class="cuerpo-card">
                    <a href="">{{$juego->nombre_juego}}</a>
                    <p>Vendedor: </p>
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: {{$juego->precio}} €</p>
                    <a href="#" class="boton-comprar">comprar</a>
                </div>
            </div>
            @endforeach
</div>
<div class="paginacion">{{$juegos->links()}}</div>  
@endsection