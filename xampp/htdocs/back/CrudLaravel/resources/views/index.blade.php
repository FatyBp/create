@extends('layouts/main')
@section('contenido')
    
<div class="container">
    <h2>
        Crud basico con laravel 8
    </h2>
    <div class="row">
        <div class="col">
            <a href="/create" class="btn btn-primary">
                Nombre nuevo
            </a>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Apellido Paterno</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{$item->paterno}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{route('edit',$item->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                        <td><a href="{{route('show',$item->id)}}" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection