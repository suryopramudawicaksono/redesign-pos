<div class="grid grid-cols-1 md:grid-cols-3 gap-3">
    <div class="space-y-2">
        <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
            Start Date
        </label>
        <div class="relative sm:flex">
            <input type="text"
                class="datepicker peer py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                placeholder="">
            <div
                class="absolute inset-y-0 inset-e-0 flex items-center pointer-events-none pe-3 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                <svg class="shrink-0 size-5 text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                </svg>
            </div>
        </div>
    </div>

    <div class="space-y-2">
        <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
            End Date
        </label>
        <div class="relative sm:flex">
            <input type="text"
                class="datepicker peer py-1.5 sm:py-2 px-3 block w-full bg-layer border border-gray-200 focus:outline-none shadow-xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                placeholder="">
            <div
                class="absolute inset-y-0 inset-e-0 flex items-center pointer-events-none pe-3 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                <svg class="shrink-0 size-5 text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                </svg>
            </div>
        </div>
    </div>

    <div class="flex items-end">
        <x-button>
            Tampilkan
        </x-button>
    </div>
</div>