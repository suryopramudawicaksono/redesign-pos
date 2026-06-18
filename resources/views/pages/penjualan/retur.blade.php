@extends('layouts.app')

@section('title', 'Penjualan')
@section('subtitle', 'Retur')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        History Retur Penjualan
    </h2>
</div>

<!-- Table -->
<x-datatable title="History Retur Penjualan">

    <x-slot:actions>

        <x-date-range />
        <x-button>Tampilkan</x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>

    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>
        <x-table-th>No Retur</x-table-th>
        <x-table-th>No Penjualan</x-table-th>
        <x-table-th>Tanggal</x-table-th>
        <x-table-th>Jam</x-table-th>
        <x-table-th>Nama Staff</x-table-th>
        <x-table-th>Catatan</x-table-th>
        <x-table-th>Detail</x-table-th>
        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection