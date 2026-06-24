@props([
    'value' => null,
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover disabled:opacity-50 focus:outline-hidden focus:bg-layer-focus'
    ]) }}
>
    {{ $slot }}

    @if($value)
        <span class="inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium bg-red-500 text-foreground-inverse">
            {{ $value }}
        </span>
    @endif
</button>