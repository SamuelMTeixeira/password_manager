@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center border-indigo-400 text-sm font-extrabold leading-5 text-black focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center border-transparent text-sm font-medium leading-5 text-black hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
