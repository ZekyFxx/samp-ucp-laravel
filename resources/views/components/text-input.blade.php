@props(['disabled' => false])

<input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white placeholder:text-white bg-transparent border-transparent border-b-blue-500 focus:border-transparent focus:border-b-blue-600 focus:outline-transparent focus:ring-0']) !!}>
