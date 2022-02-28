@extends('layouts.plantilla')
@section('title', 'pedido')
@section('content')

<style>
    .pedido-realizado{
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }

    a{text-decoration: none;}

    .boton{
        color: black;
        text-align: center;
        border-radius: 0.5em;
        padding: 0.5rem 2rem 0.5rem 2rem;
        background-color: white;
        width: 10rem;
        transition: 0.6s;
    }

    .boton:hover{
        color: #f1c70c;
    }
</style>

<div class="hero"> 

    <div class="pedido-realizado">
        <h1 style="color: springgreen;">¡Se ha enviado la solicitud de compra al vendedor!</h1>
        <h4 style="color: white">En menos de 24h le contactará para aceptar el pago y enviarle su pedido.</h4>
        
        <a href="{{route('inicio')}}" class="boton">Volver al inicio</a>
    </div>


</div>

@endsection