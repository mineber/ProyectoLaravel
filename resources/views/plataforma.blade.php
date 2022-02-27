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
                    <p>Vendedor: @foreach($users as $user)
                        @if ($user->id == $juego->user_id)
                            {{$user->nombre_usuario}}
                        @endif
                    @endforeach</p>
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: {{$juego->precio}} €</p>
                    <form action="{{route('aniadircarrito')}}" method="post">
                    @csrf
                        <input type="hidden" name="id_juego" value="{{$juego->cod_juego}}">
                        <input class="boton-comprar" type="submit" value="Añadir al carrito">
                    </form>
                </div>
            </div>
            @endforeach
</div>
<div class="paginacion">{{$plataforma->links()}}</div>  
@endsection