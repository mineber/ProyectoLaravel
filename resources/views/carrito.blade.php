@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'carrito')
@section('content')

<h1 class="titulo-juegos">CARRITO</h1>
<div class="div-juegos"> 
            <!--Intentando que muestre los id de los juegos quiero morirme-->
            @foreach($carrito as $carritoJuegos)
            <div class="card-juego">
                <p>{{$carritoJuegos->cod_carrito}}</p>
                <p>{{$carritoJuegos->user_id}}</p>
                <p>{{$carritoJuegos->juego_id}}</p>
            </div>
            @endforeach
</div>
<div class="paginacion">{{$carrito->links()}}</div>  
@endsection