@props([
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
])

<div class="w-full space-y-3">
    @if($label)
        <label
            for="{{ $id }}"
            class="block mb-2 text-sm font-medium text-foreground"
        >
            {{ $label }}
        </label>
    @endif

    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => 'py-2.5 px-4 rounded-lg block w-full bg-layer border border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none'
        ]) }}
    >
</div>