@extends('layouts.app')

@section('title', 'Pembelian')
@section('subtitle', 'Retur')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        History Retur Pembelian
    </h2>
</div>

<!-- Table -->
<x-datatable title="History Retur Pembelian">

    <x-slot:actions>

        <x-date-range />

    </x-slot:actions>

    <x-slot:head>

        <x-table-th>No Penjualan</x-table-th>
        <x-table-th>Tanggal</x-table-th>
        <x-table-th>Nama Pelanggan</x-table-th>
        <x-table-th>Nama Staff</x-table-th>
        <x-table-th>Nama Item</x-table-th>
        <x-table-th>Total Harga</x-table-th>
        <x-table-th>Detail</x-table-th>
        <x-table-th>Terbayar</x-table-th>
        <x-table-th>Sisa</x-table-th>
        <x-table-th>Status</x-table-th>
        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection