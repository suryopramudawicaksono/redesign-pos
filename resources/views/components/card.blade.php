@props([
    'title',
    'value',
    'color' => 'primary',
])

@php
$colors = [
    'primary' => [
        'text' => 'text-indigo-600',
        'bg' => 'bg-indigo-100',
    ],

    'success' => [
        'text' => 'text-emerald-600',
        'bg' => 'bg-emerald-100',
    ],

    'danger' => [
        'text' => 'text-rose-600',
        'bg' => 'bg-rose-100',
    ],

    'warning' => [
        'text' => 'text-amber-600',
        'bg' => 'bg-amber-100',
    ],
];
@endphp

<div class="overflow-hidden rounded-xl bg-layer border border-layer-line shadow-xs">
    <div class="p-4">
        <div class="flex items-center gap-4">

            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl {{ $colors[$color]['bg'] }} {{ $colors[$color]['text'] }}">
                {{ $icon ?? '' }}
            </div>

            <div class="min-w-0">
                <p class="text-sm text-slate-500 dark:text-gray-200">
                    {{ $title }}
                </p>

                <h3 class="text-xl font-bold {{ $colors[$color]['text'] }}">
                    {{ $value }}
                </h3>
            </div>

        </div>
    </div>
</div>