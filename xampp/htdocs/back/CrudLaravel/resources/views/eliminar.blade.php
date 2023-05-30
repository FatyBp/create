@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>El dato a eliminar</h2>
            <ul>
                <li>El apellido es:{{$items->paterno}}</li>
                <li>El nombre es:{{$items->nombre}}</li>
            </ul>
            <form action="{{route('destroy',$items->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button href="" class="btn btn-danger mt-3">Eliminar definitivamente</button>
            </form>
        </div>
    </div>
</div>
@endsection