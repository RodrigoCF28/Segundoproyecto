@props(['type' => 'Info'])
@php
    switch($type) {
        case 'Info':
            $title = $title ?? 'Info alert!';
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
            break;
        case 'Success':
            $title = $title ?? 'Success alert!';
            $class="text-green-800 bg-green-50 dark:text-green-300";
            break;
        case 'Warning':
            $title = $title ?? 'Warning alert!';
            $class="text-yellow-800 bg-yellow-50 dark:text-yellow-300";
            break;
        case 'Danger':
            $title = $title ?? 'Danger alert!';
            $class="text-red-800 bg-red-50 dark:text-red-300";
            break;
        default:
            $title = $title ?? 'Info alert!';
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";
    }
@endphp
<div {{ $attributes->merge(['class' => "p-4 mb-4 rounded-lg $class"]) }} role="alert">
    <span class="font-medium">{{ $title }}</span> {{ $slot }}
    <!--
        $slot: Es el contenido que va dentro del componente
        $attributes: Son los atributos adicionales que se le pueden pasar al componente
        Podemos imprimr los atributos que se le pasen y mediante la función merge podemos agregar clases adicionales
    -->
    <p>
        {{$attributes}}
    </p>
</div>