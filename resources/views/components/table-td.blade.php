<td {{ $attributes->merge([
        'class' => 'size-px whitespace-nowrap'
    ]) }}>
    <div class="ps-6 pe-3 py-2">
        <span class="text-sm text-muted-foreground-2">
            {{ $slot }}
        </span>
    </div>
</td>