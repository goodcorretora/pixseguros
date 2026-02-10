@props(['value'])
<li>
    <a {{ $attributes->merge(['class' => 'w-1/2 text-primary-600 mb-4 hover:text-primary-600 hover:font-bold lg:mb-6']) 
        }}>
        {{ $value ?? $slot }}
    </a>
</li>