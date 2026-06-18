@extends('layouts.app')

@section('title', 'Penjualan')
@section('subtitle', 'Sessions')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        Kasir Sessions
    </h2>
</div>

<!-- Table -->
<x-datatable title="Kasir Sessions">

    <x-slot:actions>

        <x-select label="Pilih Filter" placeholder="Pilih..." />
        <x-date-range />
        <x-button>Tampilkan</x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>Nama Kasir</x-table-th>
        <x-table-th>Saldo Awal</x-table-th>
        <x-table-th>Total Item</x-table-th>
        <x-table-th>Total Bruto</x-table-th>
        <x-table-th>Total Netto</x-table-th>
        <x-table-th>Total Cash</x-table-th>
        <x-table-th>Total Non Cash</x-table-th>
        <x-table-th>Total Diskon</x-table-th>
        <x-table-th>Total Redeem Poin</x-table-th>
        <x-table-th>Saldo Akhir</x-table-th>
        <x-table-th>Waktu Buka</x-table-th>
        <x-table-th>Waktu Tutup</x-table-th>
        <x-table-th>Catatan</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection