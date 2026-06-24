@extends('layouts.app')

@section('title', 'E-Commerce')
@section('subtitle', 'Cart')

@section('content')

<!-- Table -->
<x-datatable title="Cart">

    <x-slot:actions>

        <div class="items-center">
            <h3 class="text-xl font-semibold text-foreground">
                Cart
            </h3>
            <p class="text-sm text-muted-foreground-2">
                Daftar belanja customer
            </p>
        </div>

    </x-slot:actions>

    <x-slot:sides>

        <x-badge value="2">
            Total Item
        </x-badge>
        
    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>

        <x-table-th>Customer</x-table-th>

        <x-table-th>Produk</x-table-th>

        <x-table-th>Tipe</x-table-th>

        <x-table-th>Harga</x-table-th>

        <x-table-th>Qty</x-table-th>

        <x-table-th>Subtotal</x-table-th>

        <x-table-th>Waktu</x-table-th>

        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->

@endsection