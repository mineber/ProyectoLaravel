@extends('layouts.plantilla')

@section('title', 'Juegos')
@section('content')
<style>
.prueba{
    width: 300px;
    margin: 10px 20px;
}
.container{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}
</style>
<div class="container">
@foreach($juegos as $juego)
    <div class="prueba">
        <img src="descarga.jpg" alt="">
        <a href="">{{$juego->nombre_juego}}</a> <br>
        {{substr($juego->descripcion, 0, 20)}}. . .
    </div>
@endforeach
</div>
{{$juegos->links()}}
@endsection