@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'Produk')

@section('content')

<!-- Card Section -->
<div class="max-w-8xl px-4 py-6 sm:px-6 lg:px-8 mx-auto">

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <a href="{{ route('stock') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
          transition-all duration-300 ease-out
          hover:-translate-y-1
          hover:shadow-lg
          hover:shadow-primary/10">

            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-11 bg-surface rounded-lg
                    transition-colors duration-300
                    group-hover:bg-primary/10">

                    <svg class="size-5 text-muted-foreground-2
                        transition-colors duration-300
                        group-hover:text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>


                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        Produk
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Stock
                    </h3>
                </div>
            </div>
        </a>

        <a href="{{ route('paket') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
          transition-all duration-300 ease-out
          hover:-translate-y-1
          hover:shadow-lg
          hover:shadow-primary/10">

            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-11 bg-surface rounded-lg
                    transition-colors duration-300
                    group-hover:bg-primary/10">

                    <svg class="size-5 text-muted-foreground-2
                        transition-colors duration-300
                        group-hover:text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        Produk
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Paket Produk
                    </h3>
                </div>
            </div>
        </a>

        <a href="{{ route('kategori') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
          transition-all duration-300 ease-out
          hover:-translate-y-1
          hover:shadow-lg
          hover:shadow-primary/10">

            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-11 bg-surface rounded-lg
                    transition-colors duration-300
                    group-hover:bg-primary/10">

                    <svg class="size-5 text-muted-foreground-2
                        transition-colors duration-300
                        group-hover:text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        Produk
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Kategori
                    </h3>
                </div>
            </div>
        </a>

    </div>
    <!-- End Grid -->
</div>
<!-- End Card Section -->

@endsection