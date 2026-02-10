@props(['value'])
<a {{ $attributes->merge(['class' => 'block text-primary-600 hover:bg-primary-600 hover:text-white rounded-md px-3 py-2 text-base font-bold']) 
    }}>
    {{ $value ?? $slot }}
</a>
