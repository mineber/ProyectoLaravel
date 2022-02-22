@extends('layouts.plantillaJuegos')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'juegos')
@section('content')

<div class="div-juegos">
    {{-- <h2>Juegos más recientes</h2> --}}
            @foreach($juegos as $juego)
            <div class="card-juego">
                <img src="{{asset('img/'.$juego->imagen)}}" alt="">
                <div class="cuerpo-card">
                    <a href="">{{$juego->nombre_juego}}</a><br> 
                    {{substr($juego->descripcion, 0, 20)}}
                    <p>Precio: {{$juego->precio}} €</p>
                    <a href="#" class="btn btn-primary mt-4">Buy</a>
                </div>
            </div>
            @endforeach
<div class="paginacion">{{$juegos->links()}}</div>  

</div>

@endsection