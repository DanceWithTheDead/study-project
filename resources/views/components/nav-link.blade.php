@props(['active' => false])

<a class="{{ $active ? "active" : false }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
