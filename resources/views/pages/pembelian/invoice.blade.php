@extends('layouts.app')

@section('title', 'Pembelian')
@section('subtitle', 'Invoice')

@section('content')

<!-- Card Section -->
<div class="max-w-8xl px-6 pt-6 pb-2 mx-auto">
    <!-- Card -->
    <div class="bg-layer rounded-xl shadow-xs p-4">
        <form>
            <!-- Section -->
            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-layer-line">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-foreground">
                        Tambah Invoice Pembelian
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-full-name"
                        class="inline-block text-sm font-medium text-muted-foreground-1 mt-2.5">
                        Tanggal
                    </label>
                </div>

                <div class="sm:col-span-9">
                    <div class="relative sm:flex">
                        <input type="text"
                            class="datepicker peer py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="">
                        <div
                            class="absolute inset-y-0 inset-e-0 flex items-center pointer-events-none pe-3 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg class="shrink-0 size-5 text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-email"
                        class="inline-block text-sm font-medium text-muted-foreground-1 mt-2.5">
                        Jatuh Tempo (Hari)
                    </label>
                </div>

                <div class="sm:col-span-9">
                    <input type="text"
                        class="py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="0">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <div class="inline-block">
                        <label for="af-submit-application-phone"
                            class="inline-block text-sm font-medium text-muted-foreground-1 mt-2.5">
                            Pemasok
                        </label>
                    </div>
                </div>

                <div class="sm:col-span-9">
                    <input type="text"
                        class="py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="">
                    </p>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Section -->

            <div class="mt-2 flex justify-end gap-x-2">
            <button type="button"
                class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                Simpan
            </button>
        </div>
        </form>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->

<!-- Table -->
<x-datatable title="History Invoice Pembelian">

    <x-slot:actions>

        <x-date-range/>

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