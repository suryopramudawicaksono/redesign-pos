@extends('layouts.app')

@section('title', 'E-Commerce')
@section('subtitle', 'Pengiriman')

@section('content')

<!-- Table -->
<x-datatable title="Pengiriman">

    <x-slot:actions>

        <div class="items-center">
            <h3 class="text-xl font-semibold text-foreground">
                Pengiriman
            </h3>
            <p class="text-sm text-muted-foreground-2">
                Kelola seluruh pengiriman
            </p>
        </div>

    </x-slot:actions>

    <x-slot:sides>

        <x-button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah Pengiriman
        </x-button>

    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>

        <x-table-th>Customer</x-table-th>

        <x-table-th>No Nota</x-table-th>

        <x-table-th>Metode</x-table-th>

        <x-table-th>Kurir/Armada</x-table-th>

        <x-table-th>Resi/Driver</x-table-th>

        <x-table-th>Ongkir</x-table-th>

        <x-table-th>Status</x-table-th>

        <x-table-th>Tanggal Pengiriman</x-table-th>

        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection