@props(['active'])

@php
$classes = ($active ?? false)
            ? 'color: #9a563a;'
            : '';
@endphp

<a {{ $attributes->merge(['style' => $classes]) }}>
    {{ $slot }}
</a>
