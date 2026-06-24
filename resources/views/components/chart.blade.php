@props([
    'id',
    'title' => null,
])

<div class="bg-layer border border-layer-line rounded-xl shadow-2xs overflow-hidden">
    
    @if($title)
        <div class="px-5 py-4 border-b border-layer-line">
            <h3 class="font-semibold text-slate-800 dark:text-white">
                {{ $title }}
            </h3>
        </div>
    @endif

    <div class="p-5">
        <div id="{{ $id }}"></div>
    </div>

</div>