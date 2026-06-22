@extends('layouts.app')

@section('title', 'Finance')
@section('subtitle', 'Pengeluaran')

@section('content')

<div class="sm:col-span-12 px-6 pt-6">
    <h2 class="text-lg font-semibold text-foreground">
        Pembayaran
    </h2>
</div>

<!-- Table -->
<x-datatable title="Pembayaran">

    <x-slot:actions>

        <x-button>Tampilkan</x-button>

    </x-slot:actions>

    <x-slot:sides>

        <x-search/>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>Tanggal</x-table-th>
        <x-table-th>Kategori</x-table-th>
        <x-table-th>Nominal</x-table-th>
        <x-table-th>Keterangan</x-table-th>
        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection