<th
    {{ $attributes->merge([
        'class' => 'ps-6 pe-3 py-3 text-start'
    ]) }}>

    <div class="flex items-center gap-x-2">
        <span class="text-xs font-semibold uppercase text-foreground">
            {{ $slot }}
        </span>
    </div>

</th>