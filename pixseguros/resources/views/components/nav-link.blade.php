@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 py-2 mt-3 mb-3 text-base text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold text-base rounded-md focus:outline-hidden focus:border-primary-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-4 py-2 text-base text-secondary-900 hover:text-primary-600 hover:font-bold focus:outline-hidden focus:text-secondary-700 focus:border-secondary-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
