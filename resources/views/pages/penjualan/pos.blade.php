@extends('layouts.pos')

@section('title', 'Solo POS')
@section('subtitle', 'Point of Sale')

<!-- Data Dummy -->
@php
$products = json_decode(
file_get_contents(resource_path('data/products.json')),
true
);
@endphp

@section('content')
<div class="md:flex flex-row-reverse justify-beetwen gap-4 m-4">

    <!-- Cart Section -->
    <div id="cartHidden" class="hidden md:block w-full md:w-3/6 lg:w-3/5">
        <div class="w-full flex gap-4">

            <!-- Menu -->
            <x-select placeholder="Nama Pelanggan " />
            <x-input name="poin" placeholder="Total Poin " />

            <!-- Keranjang Counter -->
            <button type="button"
                class="cart-btn inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 disabled:w-lg">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <span id=""
                    class="cart-total inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                    0
                </span>
            </button>

        </div>

        <!-- Keranjang Kosong -->
        <div id="empty-cart" class="absolute w-[-webkit-fill-available] me-5 my-4">
            <div
                class="flex justify-center items-center gap-2 bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg w-full p-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                <p>Keranjang Kosong</p>
            </div>
        </div>

        <!-- Keranjang Isi -->
        <div id="cart"
            class="space-y-2 my-4 pe-1 h-[calc(100vh-360px)] overflow-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-track]:rounded-lg [&::-webkit-scrollbar-thumb]:rounded-lg [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">

        </div>

        <!-- Total -->
        <div class="fixed w-[-webkit-fill-available] bottom-1 ms-0 m-4">

            <!-- Inout Section -->
            <div class="grid grid-cols-2 gap-x-2 gap-y-1 mb-2">
                <!-- Input Diskon -->
                <div class="mb-2">
                    <label class="block mb-1 text-xs font-medium text-foreground">
                        Diskon
                    </label>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="relative">
                            <input id="discountPercent" type="number" placeholder="0"
                                class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">

                            <div class="absolute inset-y-0 inset-e-0 flex items-center pe-4 pointer-events-none">
                                <span class="text-muted-foreground-1 text-xs font-medium">%</span>
                            </div>
                        </div>
                        <div class="relative">
                            <input id="discountAmount" type="number" placeholder="0"
                                class="no-spinner text-foreground py-1.5 px-4 pe-12 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">

                            <div class="absolute inset-y-0 inset-e-0 flex items-center pe-4 pointer-events-none">
                                <span class="text-muted-foreground-1 text-xs font-medium">Rp</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Input Pembayaran -->
                <div class="flex gap-2">
                    <div>
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Cash
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                    <div>
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Non Cash
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                </div>

                <!-- Total Bayar dan Kembalian -->
                <div class="flex gap-2">
                    <div class="mb-2">
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Total Bayar
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                    <div class="mb-2">
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Kembali
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                </div>

                <!-- Poin -->
                <div class="flex gap-2">
                    <div class="mb-2">
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Poin Earn
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                    <div class="mb-2">
                        <label class="block mb-1 text-xs font-medium text-foreground">
                            Redeem Poin
                        </label>
                        <input type="number" placeholder="0"
                            class="no-spinner text-foreground py-1.5 px-4 pe-10 block w-full bg-layer border border-layer-line rounded-lg focus:outline-none focus:border-primary-focus focus:ring-primary-focus">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-2">
                <div
                    class="col-span-3 flex justify-between items-center bg-white border border-gray-300 text-gray-800 text-sm rounded-lg w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white cursor-pointer hover:border-primary hover:shadow-sm">
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-lime-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd"
                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                clip-rule="evenodd" />
                            <path
                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>
                        <p id="price-total" class="font-semibold">Rp0,00</p>
                    </div>
                    <button class="flex items-center gap-2 cursor-pointer">
                        <p class="hidden lg:block font-semibold">Proses Transaksi</p>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <x-button variant="danger">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 13.5H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    Hold
                </x-button>

            </div>
        </div>

    </div>

    <!-- Product Section -->
    <div id="productHidden" class="w-full md:w-3/6 lg:w-full">
        <div class="flex gap-3">

            <!-- Search Bar -->
            <form class="w-full">
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="shrink-0 inline-flex items-center py-2.5 px-4 text-sm  border-e-0 font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">
                        10 Item
                    </button>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 inset-e-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." required />
                    </div>
                </div>
            </form>

            <form class="w-full">
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="shrink-0 inline-flex items-center py-2.5 px-4 text-sm  border-e-0 font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">
                        Poin
                    </button>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 inset-e-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="1 Point  =  Rp10,000" readonly disabled />
                    </div>
                </div>
            </form>

            <!-- Keranjang Counter -->
            <button type="button"
                class="cart-btn md:hidden inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <span id=""
                    class="cart-total inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                    0
                </span>
            </button>

        </div>

        <!-- Product View -->
        <div
            class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4 my-4 pe-1 h-[calc(100vh-250px)] md:h-[calc(100vh-200px)] overflow-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-track]:rounded-lg [&::-webkit-scrollbar-thumb]:rounded-lg [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">

            @forelse ($products ?? [] as $item)
            <div class="product-item h-min bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg w-full dark:bg-gray-700 dark:border-gray-600 dark:text-white cursor-pointer"
                data-id="{{ $item['sku'] }}" data-name="{{ $item['name'] }}" data-price="{{ $item['price'] }}"
                data-image="{{ $item['image'] }}" data-sku="{{ $item['sku'] }}" data-unit="{{ $item['unit'] }}"
                data-stock="{{ $item['stock'] }}" onclick="addToCart(this)">
                <div class="flex justify-center">
                    <img class="rounded-t-lg object-cover w-full h-40" src="{{ $item['image'] }}"
                        alt="{{ $item['name'] }}">
                </div>

                <div class="p-2 space-y-1">
                    <p class="text-sm text-center font-semibold truncate">
                        {{ $item['name'] }}
                    </p>

                    <p
                        class="text-sm text-center font-semibold truncate text-foreground bg-layer border border-layer-line px-2.5 py-0.5 rounded mb-2">
                        Rp{{ number_format($item['price'], 2, ',', '.') }}
                    </p>

                    <div class="text-center lg:flex justify-center items-center text-xs mb-1 md:space-y-1 lg:space-y-0">
                        <p>
                            <i class="fa-solid fa-inbox me-1"></i>
                            {{ $item['sku'] }}
                        </p>

                        <div class="flex justify-center gap-1">
                            <span
                                class="bg-gray-100 text-gray-800 border border-layer-line text-xs font-medium lg:ms-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $item['stock'] }}
                            </span>
                            <span
                                class="bg-gray-100 text-gray-800 border border-layer-line text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $item['unit'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div
                class="md:col-span-2 lg:col-span-4 flex justify-center items-center gap-2 bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg w-full p-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                <p>Tidak ada data produk</p>
            </div>
            @endforelse

        </div>

        <!-- Button Group -->
        <div class="fixed flex flex-wrap items-center  lg:flex-nowrap bottom-1 my-4 gap-4">
            <div class="w-full flex justify-start gap-4">
                <button id="fullscreenButton" type="button"
                    class="text-layer-foreground bg-layer border border-layer-line focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-3 text-sm text-center inline-flex items-center">
                    <svg id="fullscreenIcon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 8h4V4m12 4h-4V4M4 16h4v4m12-4h-4v4" />
                    </svg>

                    <svg id="exitFullscreenIcon" class="w-5 h-5 hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
                    </svg>
                    <span class="sr-only">Toggle Fullscreen</span>
                </button>

                <button type="button"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg px-3 py-2 text-sm text-center flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                    Void
                </button>
            </div>

            <div class="inline-flex rounded-md" role="group">
                <button data-modal-target="setup-modal" data-modal-toggle="setup-modal" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    Stock
                </button>
                <button data-modal-target="pos-modal" data-modal-toggle="pos-modal" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-e border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9.75h4.875a2.625 2.625 0 0 1 0 5.25H12M8.25 9.75 10.5 7.5M8.25 9.75 10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                    </svg>
                    History
                </button>
                <button data-modal-target="sync-modal" data-modal-toggle="sync-modal" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    Refresh
                </button>
                <button data-modal-target="tutup-modal" data-modal-toggle="tutup-modal" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    Info
                </button>
            </div>

            <button type="button"
                class="flex shrink-0 justify-center items-center gap-2 size-9.5 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground hover:bg-layer-hover focus:outline-hidden focus:bg-layer-hover disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
            </button>

        </div>

    </div>
</div>
@endsection