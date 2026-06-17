@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'User')

@section('content')

<!-- Card Section -->
<div class="max-w-8xl px-4 py-6 sm:px-6 lg:px-8 mx-auto">

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <a href="{{ route('data') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
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
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        User
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Data
                    </h3>
                </div>
            </div>
        </a>

        <a href="{{ route('role') }}" class="group flex flex-col bg-card border border-card-line shadow-2xs rounded-xl
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
                            d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>

                </div>

                <div class="grow">
                    <p class="text-xs text-muted-foreground-1">
                        User
                    </p>

                    <h3 class="mt-1 text-xl font-semibold text-foreground
                       transition-colors duration-300
                       group-hover:text-primary">
                        Role
                    </h3>
                </div>
            </div>
        </a>

    </div>
    <!-- End Grid -->
</div>
<!-- End Card Section -->

@endsection