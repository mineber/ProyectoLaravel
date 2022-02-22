@extends('layouts.plantilla')
@section('title', 'login')
@section('content')

<div class="hero"> 
    <form action="" method="post" class="formulario">
        <h2>Login</h2>
        <label for="nombreUsuario">Nombre de usuario: </label>
        <input type="text" name="nombreUsuario" id="nombreUsuario">
        <label for="contraseña">Contraseña: </label>
        <input type="password" name="contraseña" id="contraseña">
        <input type="submit" value="Loguearse" class="btn-login">
    </form>
</div>

@endsection