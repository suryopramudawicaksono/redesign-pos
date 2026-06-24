@extends('layouts.guest')

@section('title', '404 Not Found')

@section('content')
<div class="max-w-3xl h-screen flex items-center flex-col mx-auto">
    <!-- ========== HEADER ========== -->
    <header class="mb-auto flex justify-center z-50 w-full py-4">
        <nav class="px-4 sm:px-6 lg:px-8">
            <div class="px-6 pt-4 flex items-center gap-4">
                <!-- Logo -->
                <button type="button"
                    class="size-8 flex justify-center items-center gap-x-2 bg-layer border border-layer-line text-layer-foreground hover:text-layer-foreground-hover rounded-lg focus:outline-hidden focus:text-layer-foreground-focus disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="text-primary dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M4.5 3c-.277 0-.5.223-.5.5v8c0 .277.223.5.5.5h1c.277 0 .5-.223.5-.5V9h3c1.645 0 3-1.355 3-3s-1.355-3-3-3zM6 5h3c.564 0 1 .436 1 1s-.436 1-1 1H6z" />
                    </svg>
                </button>
                <a class="flex-none text-xl font-semibold text-foreground" href="#" aria-label="Brand">Solo
                    POS</a>
                <!-- End Logo -->
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block text-7xl font-bold text-foreground sm:text-9xl">404</h1>
            <p class="mt-3 text-muted-foreground-2">Oops, something went wrong.</p>
            <p class="text-muted-foreground-2">Sorry, we couldn't find your page.</p>
            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('dashboard') }}">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto text-center py-5">
        <div class="max-w-340 mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-sm text-muted-foreground-1">© All Rights Reserved. 2026.</p>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->
</div>
@endsection