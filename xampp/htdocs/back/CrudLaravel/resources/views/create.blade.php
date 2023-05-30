@extends('layouts/main')
@section('contenido')
<div class="container">
    <h2>
        Agregar nuevo nombre
    </h2>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-info"> Regresar</a>
            <hr>
            <form action="/store" method="post">
                @csrf
                @method('POST')
                <label for="paterno">Escribe el Apellido</label>
                <input type="text" name="paterno" id="paterno" class="form-control">
                <label for="nombre">Escribe el nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <button class="btn btn-primary mt-3">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection