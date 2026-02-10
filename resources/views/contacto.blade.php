@extends('layouts.app')
<!-- En la línea anterior hago la referencia a la plantilla -->
<!-- Si el contenido abarca más de una línea se puede utilizar la siguiente estructura, caso contrario se puede utilizar la misma directiva de section pasando como segundo parametro el nombre del titulo-->
@section('title', 'Laravel 12 | Contacto')


@push('css')
    <style>
        body{
            background-color: #f3f3f3
        }
    </style>
@endpush

@push('css')
    <style>
        h1{
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px4">
        <h1>Entrando a la sección de Contacto</h1>
        <p>Aquí va el contenido del contacto</p>
        <p><?=$mensaje?></p>
        <p>{{$mensaje}}</p>
    </div>
@endsection