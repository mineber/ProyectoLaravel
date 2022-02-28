@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'carrito')
@section('content')
@if($_SESSION['carrito'] == 0)
    <h1 class="titulo-juegos">No hay productos en el carrito</h1>
    
@else
<h1 class="titulo-juegos">CARRITO - {{$_SESSION['carrito']}} artículo/s, total {{$_SESSION['total']}}€ <a href="{{route('pedido')}}" class="caja CC">Hacer pedido</a></h1>
@endif
<div class="div-juegos"> 
            <!--Intentando que muestre los id de los juegos quiero morirme-->
            @foreach($carrito as $carritoJuegos)
            <div class="card-juego">
                <!-- <p>{{$carritoJuegos->cod_carrito}}</p>
                <p>{{$carritoJuegos->user_id}}</p> -->
                @foreach($juegos as $juego)
                        @if ($carritoJuegos->juego_id == $juego->cod_juego)
                        <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                        <h4>Juego: {{$juego->nombre_juego}}</h4>
                        <p>Precio: <span style="color: limegreen; font-size: 1.3rem; padding-left:0.1em">{{$juego->precio}}€</span></p>
                        <p>Descripción: {{$juego->descripcion}}</p>
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