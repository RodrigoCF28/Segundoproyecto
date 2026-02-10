<x-app-layout>
    <div class="max-w-4xl mx auto px-4">
        <h1 class="text-3xl font-bold mb-4">About Page</h1>
        <h2> hola desde el controllador de PostController</h2>
        <h3>El valor ingresado del parámetro es: {{$parametro}}</h3>
        <x-alert2 type= "Warning" class="mb-4">
            
            <x-slot name="title">Título de la alerta</x-slot>
            Este es el contenido de la alerta personalizada.
        </x-alert2>
        <p>Hola mundo</p>
        <x-button type='Success' id='Success'>Botón de Inicio</x-button>
        <x-button type='Danger' id='Danger'>Botón de Danger</x-button>
        <x-button type='Warning' id='Warning'>Botón de Warning</x-button>
    </div>

    @if(!empty($nombre))
        <h4>El nombre es:{{$nombre}}</h4>
    @endif
</x-app-layout>
<div>