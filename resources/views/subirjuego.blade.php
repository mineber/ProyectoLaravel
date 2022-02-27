@extends('layouts.plantillaFormularios')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('title', 'plataformas')
@section('content')
<h1>REGÍSTRO DE USUARIOS</h1>

<div class="col-sm-6 col-md-4">
    <form action="{{route('subir')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="nameUser" class="form-label">Nombre del juego:</label>
        <input type="text" class="form-control" name="nombre_juego" id="nombre_juego" required>

        <label for="plataforma" class="form-label">Plataforma:</label>
        <select name="plataforma" id="plataforma" required class="form-control">
            <option value="Nintendo">Nintendo</option>
            <option value="Playstation">Playstation</option>
            <option value="XBOX">XBOX</option>
            <option value="PC">PC</option>
        </select>
        <!-- <input type="text" class="form-control" name="plataforma" id="plataforma" required> -->

        <label for="descripcion" class="form-label">Descripcion:</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" required>

        <label for="precio" class="form-label">Precio:</label>
        <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio en €" required>

        <label for="imagen" class="form-label">Imagen:</label>
        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">

        <div class="mt-3 text-end">
            <input type="submit" class="btn btn-dark" value="Enviar">
        </div>
    </form>
</div>


@endsection