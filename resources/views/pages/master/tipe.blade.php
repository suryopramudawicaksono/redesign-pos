@extends('layouts.app')

@section('title', 'Customer')
@section('subtitle', 'Tipe')

@section('content')

<!-- Table -->
<x-datatable title="Tipe">

    <x-slot:actions>

        <x-button>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Tambah
        </x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>ID</x-table-th>

        <x-table-th>Nama</x-table-th>

        <x-table-th>Diskon (%)</x-table-th>

        <x-table-th>Diskon (Rp)</x-table-th>

        <x-table-th>Deskripsi</x-table-th>

        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection