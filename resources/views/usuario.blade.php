@extends('layouts.plantillaCarritoUsuario')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'juegos')
<style>

</style>
@section('content')

<h1 class="titulo-juegos">Mis juegos en venta - <a href="{{route('subirjuego')}}" class="caja CC">Vender juego</a></h1>
<div class="div-juegos">
            @foreach($juegos as $juego)
            <div class="card-juego">
                <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                <div class="cuerpo-card">
                    <h4>{{$juego->nombre_juego}}</h4>
                    <p>Vendedor: @foreach($users as $user)
                        @if ($user->id == $juego->user_id)
                            {{$user->nombre_usuario}}
                        @endif
                    @endforeach</p>
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: <span style="color: limegreen">{{$juego->precio}}€</span></p>
                    <form action="{{route('borrarjuego')}}" method="post">
                    @csrf
                    @method('delete')
                        <input type="hidden" name="id_juego" value="{{$juego->cod_juego}}">
                        <input class="boton-comprar" type="submit" value="Dejar de vender">
                    </form>
                </div>
            </div>
            @endforeach
            
</div>
<div class="paginacion">{{$juegos->links()}}</div>  
@endsection