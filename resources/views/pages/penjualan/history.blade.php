@extends('layouts.app')

@section('title', 'Penjualan')
@section('subtitle', 'History')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        Data Penjualan
    </h2>
</div>

<!-- Table -->
<x-datatable title="Data Penjualan">

    <x-slot:actions>

        <x-date-range />
        <x-select label="Pelanggan" placeholder="Pilih pelanggan..." />
        <x-button>Tampilkan</x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>
        <x-table-th>No Nota</x-table-th>
        <x-table-th>Tanggal</x-table-th>
        <x-table-th>Jam</x-table-th>
        <x-table-th>Nama Kasir</x-table-th>
        <x-table-th>Nama Pelanggan</x-table-th>
        <x-table-th>Total Item</x-table-th>
        <x-table-th>HPP</x-table-th>
        <x-table-th>Biaya Administrasi</x-table-th>
        <x-table-th>Bruto</x-table-th>
        <x-table-th>Non Cash</x-table-th>
        <x-table-th>Cash</x-table-th>
        <x-table-th>Diskon (%)</x-table-th>
        <x-table-th>Diskon (Rp)</x-table-th>
        <x-table-th>Poin</x-table-th>
        <x-table-th>Redeem Poin</x-table-th>
        <x-table-th>Redeem Reward</x-table-th>
        <x-table-th>Neto</x-table-th>
        <x-table-th>Laba</x-table-th>
        <x-table-th>Detail</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection