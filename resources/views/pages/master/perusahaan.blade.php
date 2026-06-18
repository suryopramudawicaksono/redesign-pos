@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'Perusahaan')

@section('content')

<!-- Table -->
<x-datatable title="Perusahaan">

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

        <x-table-th>No</x-table-th>

        <x-table-th>Nama Perusahaan</x-table-th>

        <x-table-th>Email</x-table-th>

        <x-table-th>Alamat</x-table-th>

        <x-table-th>Telepon</x-table-th>

        <x-table-th>Logo</x-table-th>

    </x-slot:head>

    <tr>

        <x-table-td>1</x-table-td>

        <x-table-td>PT Solo Software House</x-table-td>

        <x-table-td>solo@gmail.com</x-table-td>

        <x-table-td>Solo</x-table-td>

        <x-table-td>08123456789</x-table-td>

        <x-table-td>
            <img src="{{ asset('images/P.svg') }}" class="h-8">
        </x-table-td>

    </tr>

</x-datatable>
<!-- End Table Section -->

@endsection