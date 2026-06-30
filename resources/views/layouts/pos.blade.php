<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title') @yield('subtitle')</title>
    <link rel="shortcut icon" href="{{ asset('images/P.svg') }}" type="image/svg">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    </script>
</head>

<body
    class="bg-gray-50 transition-all duration-300 lg:hs-overlay-layout-open:ps-65 dark:bg-neutral-900 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">

    <!-- Page Content -->
    <main id="content" class="max-h-screen">
        <!-- Navbar Unlinked (Use for POS Only) -->
        <div class="sticky top-0 inset-x-0 z-20 bg-navbar border-y border-navbar-line px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-between items-center py-2">
                <div class="flex items-center gap-2">
                    <button type="button"
                        class="size-8 flex justify-center items-center gap-x-2 bg-layer border border-layer-line text-layer-foreground hover:text-layer-foreground-hover rounded-lg focus:outline-hidden focus:text-layer-foreground-focus disabled:opacity-50 disabled:pointer-events-none"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                        aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                        <span class="sr-only">Toggle Navigation</span>
                        <svg class="text-primary dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M4.5 3c-.277 0-.5.223-.5.5v8c0 .277.223.5.5.5h1c.277 0 .5-.223.5-.5V9h3c1.645 0 3-1.355 3-3s-1.355-3-3-3zM6 5h3c.564 0 1 .436 1 1s-.436 1-1 1H6z" />
                        </svg>
                    </button>

                    <ol class="ms-3 flex items-center whitespace-nowrap">
                        <li>
                            <a href="" class="flex items-center text-sm text-foreground">
                                @yield('title')
                                <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-muted-foreground" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="text-sm font-semibold text-foreground truncate" aria-current="page">
                            @yield('subtitle')
                        </li>
                    </ol>
                </div>

                <div class="flex flex-row items-center justify-end gap-2">
                    <div class="flex gap-4">
                        <span class="text-sm text-foreground flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            <span id="currentDay" class="hidden lg:block"></span>
                            <span id="currentDate"></span>
                        </span>
                        <span class="text-sm text-foreground flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span id="currentTime"></span>
                        </span>
                    </div>
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2.5 me-2">
                        <svg id="theme-toggle-dark-icon" class="hidden w-4.5 h-4.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-4.5 h-4.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                        <button id="hs-dropdown-account" type="button"
                            class="w-9 h-9 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-foreground focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <img class="shrink-0 w-8 h-8 rounded-full"
                                src="https://ui-avatars.com/api/?name=Defian&background=4f46e5&color=fff" alt="Avatar">
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-dropdown border border-dropdown-line shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:inset-s-0 after:w-full before:h-4 before:absolute before:-top-4 before:inset-s-0 before:w-full"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                            <div class="py-3 px-5 bg-surface rounded-t-lg">
                                <p class="text-sm text-muted-foreground-1">Kasir</p>
                                <p class="text-sm font-medium text-foreground">Defian</p>
                            </div>
                            <div class="p-1.5 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-dropdown-item-foreground hover:bg-dropdown-item-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-dropdown-item-focus"
                                    href="">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                    </svg>
                                    Tutup Kasir
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </div>
        <!-- End Navbar -->

        @yield('content')
    </main>

</body>

</html>