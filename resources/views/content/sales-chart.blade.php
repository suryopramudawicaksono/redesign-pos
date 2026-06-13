<!-- Negative Value Chart in Card -->
<div class="py-4 flex flex-col border-b border-line-2">
    <!-- Title -->
    <div class="flex items-center gap-2">
        <svg class="text-primary w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
        </svg>
        <h3 class="text-md font-semibold text-foreground">Sales Overview</h3>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="mt-4 px-2 grid grid-cols-2 gap-2">
        <div class="flex flex-col">
            <div class="flex items-center gap-2">
                <span class="block font-medium text-xl text-foreground">
                    3,322,900
                </span>
                <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m5 12 7-7 7 7"></path>
                        <path d="M12 19V5"></path>
                    </svg>
                    9.2%
                </span>
            </div>
            <div class="flex items-center gap-1.5">
                <span class="shrink-0 w-3 h-1.5 inline-block bg-chart-primary rounded-xs"></span>
                <div class="grow">
                    <span class="block text-sm text-muted-foreground-1">
                        Penjualan
                    </span>
                </div>
            </div>
        </div>
        <!-- End Col -->

        <div class="flex flex-col items-end">
            <div class="flex items-center gap-2">
                <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m5 12 7-7 7 7"></path>
                        <path d="M12 19V5"></path>
                    </svg>
                    4.5%
                </span>
                <span class="block font-medium text-xl text-foreground">
                    1,124,300
                </span>
            </div>
            <div class="flex items-center gap-1.5">
                <span
                    class="shrink-0 w-3 h-1.5 inline-block bg-[linear-gradient(135deg,var(--color-chart-3)_25%,transparent_25%,transparent_50%,var(--color-chart-3)_50%,var(--color-chart-3)_75%,transparent_75%,transparent)] bg-size-[4px_4px] rounded-xs"></span>
                <div class="grow">
                    <span class="block text-sm text-muted-foreground-1">
                        Pembelian
                    </span>
                </div>
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->

    <!-- Apex Line Chart -->
    <div id="hs-pro-anvpch" class="min-h-80"></div>
</div>
<!-- End Negative Value Chart in Card -->

<script type="module">
document.addEventListener('DOMContentLoaded', () => {
    const options = {
        chart: {
            type: 'bar',
            height: 320,
            stacked: true,
            toolbar: {
                show: false
            }
        },

        colors: ['#3b82f6', '#93c5fd'],

        series: [{
                name: 'Penjualan',
                data: [
                    12500000,
                    18000000,
                    15000000,
                    22000000,
                    17000000,
                    25000000,
                    21000000,
                    28000000,
                    24000000,
                    26000000
                ]
            },
            {
                name: 'Pembelian',
                data: [
                    -8000000,
                    -12000000,
                    -10000000,
                    -14000000,
                    -9000000,
                    -16000000,
                    -13000000,
                    -18000000,
                    -15000000,
                    -17000000
                ]
            }
        ],

        xaxis: {
            categories: [
                '1 Jun',
                '2 Jun',
                '3 Jun',
                '4 Jun',
                '5 Jun',
                '6 Jun',
                '7 Jun',
                '8 Jun',
                '9 Jun',
                '10 Jun'
            ]
        },

        dataLabels: {
            enabled: false
        },

        legend: {
            show: false
        },

        grid: {
            borderColor: '#e5e7eb'
        },

        yaxis: {
            labels: {
                formatter: (value) => {
                    return 'Rp ' + Math.abs(value).toLocaleString('id-ID');
                }
            }
        },

        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: (value) => {
                    return (Math.abs(value) / 1000000) + ' Jt';
                }
            }
        },

        fill: {
            type: ['solid', 'pattern'],
            pattern: {
                style: ['none', 'slantedLines'],
                width: 6,
                height: 6,
                strokeWidth: 2
            }
        }
    };

    new ApexCharts(
        document.querySelector('#hs-pro-anvpch'),
        options
    ).render();
});
</script>