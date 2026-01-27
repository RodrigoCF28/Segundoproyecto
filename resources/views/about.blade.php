<x-app-layout>
    <div class="max-w-4xl mx auto px-4">
        <h1 class="text-3xl font-bold mb-4">About Page</h1>
        <h2> hola desde el controllador de PostController</h2>
        <h3>El valor ingresado del parámetro es: {{ $parametro }}</h3>
        <x-alert type= "Warning" class="mb-4">
            
            <x-slot name="title">Título de la alerta</x-slot>
            Este es el contenido de la alerta personalizada.
        </x-alert2>
        <p>Hola mundo</p>
        <x-button type='success' id='success'>Botón de Inicio</x-button>
        <x-button type='danger' id='danger'>Botón de Inicio</x-button>
        <x-button type='warning' id='warning'>Botón de Inicio</x-button>
    </div>

    @if(!empty($nombre))
        <h4>El nombre es: {{ $nombre }}</h4>
    @endif
</x-app-layout>