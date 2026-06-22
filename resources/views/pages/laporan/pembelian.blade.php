@extends('layouts.app')

@section('title', 'Laporan')
@section('subtitle', 'Pembelian')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        Laporan Pembelian
    </h2>
</div>

<!-- Table -->
<x-datatable title="Laporan Pembelian">

    <x-slot:actions>

        <x-date-range/>
        <x-button>Tampilkan</x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-button variant="secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            Export to Excel
        </x-button>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>
        <x-table-th>No Pembelian</x-table-th>
        <x-table-th>Tanggal</x-table-th>
        <x-table-th>Nama Pemasok</x-table-th>
        <x-table-th>Nama Staff</x-table-th>
        <x-table-th>Total Item</x-table-th>
        <x-table-th>Total Harga</x-table-th>
        <x-table-th>Detail</x-table-th>
        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection