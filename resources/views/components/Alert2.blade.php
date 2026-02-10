<div {{$attributes->merge(['class'=>'p-4 text-sm rounded-lg '.$class]) }} role="alert">
    <span class="font-medium">{{ $title ?? "No existe el valor del título" }}</span> {{ $slot }}
    <h1>Estos son los valores de la variable attributes</h1>
    {{$attributes}}
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>