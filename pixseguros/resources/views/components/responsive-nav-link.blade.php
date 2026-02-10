@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold text-base rounded-md
            focus:outline-hidden focus:text-secondary-50 focus:bg-primary-600 focus:border-primary-700 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 w-full text-base text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-left';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
