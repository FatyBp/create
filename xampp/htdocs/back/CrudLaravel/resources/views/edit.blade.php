@extends('layouts/main')
@section('contenido')
<div class="container">
    <h2>
        Actualizar persona
    </h2>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-info"> Regresar</a>
            <hr>
            <form action="{{route('update', $items->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="paterno">Apellido</label>
                <input type="text" name="paterno" id="paterno" class="form-control" value="{{$items->paterno}}">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$items->nombre}}">
                <button class="btn btn-warning mt-3">
                    Actualizar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection