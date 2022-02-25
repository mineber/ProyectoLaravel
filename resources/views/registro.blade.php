@extends('layouts.plantillaFormularios')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('title', 'plataformas')
@section('content')
<h1>REGÍSTRO DE USUARIOS</h1>

<div class="col-sm-6 col-md-4">
    <form action="#">

        <label for="nameUser" class="form-label">Nombre usuario:</label>
        <input type="text" class="form-control" name="nameUser" id="nameUser" required>

        <label for="name" class="form-label">Nombre y apellidos:</label>
        <input type="text" class="form-control" name="name" id="name" required>

        <label for="correo" class="form-label">Email:</label>
        <input type="email" class="form-control" name="correo" id="correo" required>

        <label for="passw" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="passw" id="passw" required>

        <label for="direccion" class="form-label">Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required>

        <div class="mt-3 text-end">
            <input type="submit" class="btn btn-dark" value="Enviar">
        </div>
    </form>
</div>


@endsection