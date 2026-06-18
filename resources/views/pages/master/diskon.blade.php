@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'Diskon')

@section('content')

<!-- Table -->
<x-datatable title="Diskon">

    <x-slot:actions>

        <x-button>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Tambah
        </x-button>

        <x-button variant="secondary">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
            </svg>
            Simpan
        </x-button>


    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No SKU</x-table-th>

        <x-table-th>Nama</x-table-th>

        <x-table-th>Gambar</x-table-th>

        <x-table-th>HPP</x-table-th>

        <x-table-th>Harga</x-table-th>

        <x-table-th>Diskon</x-table-th>
        
        <x-table-th>Diskon (Rp)</x-table-th>

        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection