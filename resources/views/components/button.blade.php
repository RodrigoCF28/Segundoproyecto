<div>
    <?php // Se recibe dos atributos los cuales son $type y el $slot, este último es el contenido que va dentro del componente (botón) ?>
    <!--Con merge defino los valores predeterminados y lo concateno con los atributos que se reciben-->
    <button type="button" {{$attributes->merge(['class' => 'mb-3 btn btn-'.$type])}}>{{ $slot }}
    </button>
    {{ $attributes }}
    {{ $type }}
</div>