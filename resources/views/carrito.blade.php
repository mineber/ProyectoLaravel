@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'carrito')
@section('content')

<h1 class="titulo-juegos">CARRITO - {{$_SESSION['carrito']}} artículo/s, total {{$_SESSION['total']}}€ <a href="{{route('subirjuego')}}" class="caja CC">Comprar</a></h1>
<div class="div-juegos"> 
            <!--Intentando que muestre los id de los juegos quiero morirme-->
            @foreach($carrito as $carritoJuegos)
            <div class="card-juego">
                <!-- <p>{{$carritoJuegos->cod_carrito}}</p>
                <p>{{$carritoJuegos->user_id}}</p> -->
                @foreach($juegos as $juego)
                        @if ($carritoJuegos->juego_id == $juego->cod_juego)
                        <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                        Juego: {{$juego->nombre_juego}}
                       <p> Precio: {{$juego->precio}}€</p>
                       <p> Descripción: {{$juego->descripcion}}</p>
                       
                    <form action="{{route('borrarcarrito')}}" method="post">
                    @csrf
                    @method('delete')
                        <input type="hidden" name="cod_carrito" value="{{$carritoJuegos->cod_carrito}}">
                        <input class="boton-comprar" type="submit" value="Borrar del carrito">
                    </form>
                        @endif
                    @endforeach
            </div>
            @endforeach
</div>
<div class="paginacion">{{$carrito->links()}}</div>  
@endsection