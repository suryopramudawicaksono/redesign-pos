@props([
    'id',
    'title' => null,
])

<div class="bg-white rounded-xl shadow-xs">
    
    @if($title)
        <div class="px-5 py-4 border-b border-slate-200">
            <h3 class="font-semibold text-slate-800">
                {{ $title }}
            </h3>
        </div>
    @endif

    <div class="p-5">
        <div id="{{ $id }}"></div>
    </div>

</div>