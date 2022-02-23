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
<<<<<<< HEAD
                    <h4>{{$juego->nombre_juego}}</h4>
                    <p>Vendedor: </p>
=======
                    <a href="">{{$juego->nombre_juego}}</a>
                    <p>Vendedor: @foreach($users as $user)
                        @if ($user->id == $juego->user_id)
                            {{$user->nombre_usuario}}
                        @endif
                    @endforeach</p>
                     
>>>>>>> 6f9d9faf402b0207db786768e8357e5515bfb26a
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: {{$juego->precio}} €</p>
                    <a href="#" class="boton-comprar">comprar</a>
                </div>
            </div>
            @endforeach
            
</div>
<div class="paginacion">{{$juegos->links()}}</div>  
@endsection