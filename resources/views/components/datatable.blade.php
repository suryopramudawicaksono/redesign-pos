@props([
'title'
])

<div class="max-w-8xl p-6 mx-auto">

    <div class="flex flex-col">
        <div class="-m-1.5">
            <div class="p-1.5 w-full inline-block align-middle">

                <div class="bg-layer border border-layer-line rounded-xl shadow-2xs overflow-hidden">

                    <!-- Header -->
                    <div class="px-6 py-4 flex justify-between items-end border-b border-table-line">

                        <div class="inline-flex gap-x-2 items-end">
                            {{ $actions ?? '' }}
                        </div>

                        <div class="relative">
                            {{ $sides ?? '' }}
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">

                        <table class="min-w-full divide-y divide-table-line">

                            <thead class="bg-muted whitespace-nowrap">
                                <tr>
                                    {{ $head }}
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-table-line">

                                @if(trim($slot))
                                {{ $slot }}
                                @else

                                <tr>
                                    <td colspan="100">

                                        <div class="flex flex-col items-center justify-center py-16">

                                            <!-- Icon -->
                                            <div
                                                class="flex items-center justify-center size-16 rounded-full bg-muted mb-4">

                                                <svg class="size-8 text-muted-foreground-2"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                                                </svg>


                                            </div>

                                            <!-- Title -->
                                            <h3 class="text-base font-semibold text-foreground">
                                                Belum ada data {{ strtolower($title) }}
                                            </h3>

                                            <!-- Description -->
                                            <p class="mb-3 text-sm text-muted-foreground-2 text-center">

                                                Data {{ strtolower($title) }} yang ditambahkan akan muncul di tabel ini.

                                            </p>

                                            <!-- CTA -->
                                            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                                href="#">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                                Tambah
                                            </a>

                                        </div>

                                    </td>
                                </tr>

                                @endif

                            </tbody>

                        </table>
                    </div>

                    <!-- Footer -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-table-line">
                        <div class="inline-flex items-center gap-x-2">
                            <p class="text-sm text-muted-foreground-2">
                                Showing:
                            </p>
                            <div class="max-w-sm space-y-3">
                                <select
                                    class="py-2 px-3 pe-9 block w-full bg-layer border-layer-line text-layer-foreground rounded-lg text-sm focus:border-primary-focus focus:ring-primary-focus">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>9</option>
                                    <option>20</option>
                                </select>
                            </div>
                            <p class="text-sm text-muted-foreground-2">
                                of 1
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>