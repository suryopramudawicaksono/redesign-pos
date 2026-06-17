@extends('layouts.app')

@section('title', 'Master')
@section('subtitle', 'Redeem Poin')

@section('content')

<!-- Card Section -->
<div class="max-w-8xl p-6 mx-auto">
    <!-- Card -->
    <div class="bg-layer rounded-xl shadow-xs p-4 sm:p-7">
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-foreground">
                Redeem Poin
            </h2>
            <p class="text-sm text-muted-foreground-2">
                Manage your Redeem Point methods.
            </p>
        </div>

        <form>
            <!-- Section -->
            <div class="py-6 space-y-2">

                <div class="space-y-2 my-2">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
                        Jumlah Poin Dibutuhkan
                    </label>
                    <input type="text"
                        class="py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="0">
                </div>
                <div class="space-y-2 my-2">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
                        Nilai Reward (Rp)
                    </label>
                    <input type="text"
                        class="py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="0">
                </div>
                <div class="space-y-2 my-2">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
                        Deskripsi Reward
                    </label>
                    <input type="text"
                        class="py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="">
                </div>
            </div>
            <!-- End Section -->
        </form>

        <div class="mt-5 flex justify-end gap-x-2">
            <button type="button"
                class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none">
                Cancel
            </button>
            <button type="button"
                class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->

@endsection