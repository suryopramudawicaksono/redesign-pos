@extends('layouts.app')

@section('title', 'Produk')
@section('subtitle', 'Paket')

@section('content')

<!-- Table -->
<x-datatable title="Paket">

    <x-slot:actions>

        <x-button>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Tambah Paket
        </x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No. SPK</x-table-th>

        <x-table-th>Nama Produk</x-table-th>

        <x-table-th>Stock</x-table-th>

        <x-table-th>HPP</x-table-th>

        <x-table-th>Harga Jual</x-table-th>

        <x-table-th>Poin</x-table-th>

        <x-table-th>Image</x-table-th>

        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection