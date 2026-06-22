@extends('layouts.app')

@section('title', 'Laporan')
@section('subtitle', 'Keuangan')

@section('content')

<div class="max-w-8xl p-6 mx-auto">
<!-- Tab Nav -->
<nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
  <button type="button" class="hs-tab-active:bg-surface-active hs-tab-active:text-surface-foreground hs-tab-active:hover:text-surface-foreground py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-muted-foreground-1 rounded-lg hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none active" id="tab-1" aria-selected="true" data-hs-tab="#netto" aria-controls="netto" role="tab">
    Tab 1
  </button>
  <button type="button" class="hs-tab-active:bg-surface-active hs-tab-active:text-surface-foreground hs-tab-active:hover:text-surface-foreground py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-muted-foreground-1 rounded-lg hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none" id="tab-2" aria-selected="false" data-hs-tab="#utang" aria-controls="utang" role="tab">
    Tab 2
  </button>
  <button type="button" class="hs-tab-active:bg-surface-active hs-tab-active:text-surface-foreground hs-tab-active:hover:text-surface-foreground py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-muted-foreground-1 rounded-lg hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none" id="tab-3" aria-selected="false" data-hs-tab="#piutang" aria-controls="piutang" role="tab">
    Tab 3
  </button>
</nav>
<!-- End Tab Nav -->

<!-- Tab Content -->
<div class="mt-3">
  <div id="netto" role="tabpanel" aria-labelledby="tab-1">
    <p class="text-muted-foreground-1">
      This is the <em class="font-semibold text-foreground">first</em> item's tab body.
    </p>
  </div>
  <div id="utang" class="hidden" role="tabpanel" aria-labelledby="tab-2">
    <p class="text-muted-foreground-1">
      This is the <em class="font-semibold text-foreground">second</em> item's tab body.
    </p>
  </div>
  <div id="piutang" class="hidden" role="tabpanel" aria-labelledby="tab-3">
    <p class="text-muted-foreground-1">
      This is the <em class="font-semibold text-foreground">third</em> item's tab body.
    </p>
  </div>
</div>
<!-- End Tab Content -->
</div>

@endsection