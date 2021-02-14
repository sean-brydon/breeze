@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-5 hover:text-white text-white'
            : 'mr-5 hover:underline ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
