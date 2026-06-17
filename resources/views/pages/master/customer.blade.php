@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'Customer')

@section('content')

<!-- Card Section -->
<div class="max-w-8xl px-4 py-6 sm:px-6 lg:px-8 mx-auto">

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <a href="{{ route('tipe') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
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
                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        Customer
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Tipe
                    </h3>
                </div>
            </div>
        </a>

        <a href="{{ route('daftar') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
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
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        Customer
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Daftar
                    </h3>
                </div>
            </div>
        </a>

    </div>
    <!-- End Grid -->
</div>
<!-- End Card Section -->

@endsection