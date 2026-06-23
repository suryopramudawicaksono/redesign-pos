@extends('layouts.app')

@section('title', 'Laporan')
@section('subtitle', 'Keuangan')

@section('content')

<div class="max-w-8xl py-4 mx-auto">

    <!-- Tab Nav -->
    <div class="px-6 border-b border-line-2">
        <nav id="hs-tabs" class="flex justify-center gap-x-4" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-primary-active hs-tab-active:after:bg-primary-active relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-muted-foreground-1 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none active"
                id="tab-1" aria-selected="true" data-hs-tab="#netto" aria-controls="netto" role="tab"
                aria-controls="tabs-with-underline-1" role="tab">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
                Laporan Laba Bersih
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-primary-active hs-tab-active:after:bg-primary-active relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-muted-foreground-1 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                id="tab-2" aria-selected="false" data-hs-tab="#utang" aria-controls="utang" role="tab"
                aria-controls="tabs-with-underline-2" role="tab">
                <svg class="shrink-0 size-4"  xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v7.5m2.25-6.466a9.016 9.016 0 0 0-3.461-.203c-.536.072-.974.478-1.021 1.017a4.559 4.559 0 0 0-.018.402c0 .464.336.844.775.994l2.95 1.012c.44.15.775.53.775.994 0 .136-.006.27-.018.402-.047.539-.485.945-1.021 1.017a9.077 9.077 0 0 1-3.461-.203M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                Laporan Utang
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-primary-active hs-tab-active:after:bg-primary-active relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-muted-foreground-1 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                id="tab-3" aria-selected="false" data-hs-tab="#piutang" aria-controls="piutang" role="tab"
                aria-controls="tabs-with-underline-3" role="tab">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                Laporan Piutang
            </button>
        </nav>
    </div>
    <!-- End Tab Nav -->

    <!-- Tab Content -->
    <div class="mt-3">
        <div id="netto" role="tabpanel" aria-labelledby="tab-1">
            @include('content.laporan-laba')
        </div>
        <div id="utang" class="hidden" role="tabpanel" aria-labelledby="tab-2">
            @include('content.laporan-utang')
          </div>
          <div id="piutang" class="hidden" role="tabpanel" aria-labelledby="tab-3">
            @include('content.laporan-piutang')
        </div>
    </div>
    <!-- End Tab Content -->
</div>

@endsection