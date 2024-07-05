@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-slate-950'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
