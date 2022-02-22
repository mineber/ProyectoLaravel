@extends('layouts.plantilla')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'juegos')
@section('content')

<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
            @foreach($juegos as $juego)
            <div class="col-2 card m-2 p-2" style="width: 18rem;">
                <img src="{{asset('img/'.$juego->imagen)}}" class="card-img-top" alt="...">
                <div class="card-body my-2">
                    <a href="">{{$juego->nombre_juego}}</a> <br> 
                    {{substr($juego->descripcion, 0, 20)}}. . .
                    <a href="#" class="btn btn-primary mt-4">Buy</a>
                </div>
            </div>
            @endforeach
    </div>
    {{$juegos->links()}}    
</div>


@endsection