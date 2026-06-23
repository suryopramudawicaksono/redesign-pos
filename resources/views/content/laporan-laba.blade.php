<div class="flex items-end gap-2 px-6 py-2">
    <x-date-range />
    <x-button>Tampilkan</x-button>
</div>

<div class="grid grid-cols-1 gap-4 sm:grid-cols-3 p-6">

    <x-card title="Total Laba Penjualan" value="Rp 414.500" color="primary">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
            </svg>
        </x-slot:icon>
    </x-card>

    <x-card title="Total Pengeluaran" value="Rp 100.500" color="danger">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
            </svg>
        </x-slot:icon>
    </x-card>

    <x-card title="Laba Bersih" value="Rp 314.500" color="success">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
            </svg>
        </x-slot:icon>
    </x-card>

</div>

<div class="px-6">
    <x-chart id="laba-chart" title="Laporan Laba Bersih" />
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {

    new ApexCharts(
        document.querySelector("#laba-chart"), {
            chart: {
                type: 'bar',
                height: 400,
                toolbar: {
                    show: false
                }
            },

            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '75%',
                }
            },
            grid: {
                padding: {
                    left: 10,
                    right: 10
                }
            },

            dataLabels: {
                enabled: false
            },

            colors: [
                '#3b82f6',
                '#93c5fd',
                '#10B981'
            ],

            series: [{
                    name: 'Laba Penjualan',
                    data: [350000, 420000, 390000, 500000, 450000, 480000, 510000, 530000, 490000,
                        520000, 550000, 600000
                    ]
                },
                {
                    name: 'Pengeluaran',
                    data: [120000, 90000, 110000, 100000, 80000, 95000, 97000, 105000, 99000, 98000,
                        115000, 120000
                    ]
                },
                {
                    name: 'Laba Bersih',
                    data: [230000, 330000, 280000, 400000, 370000, 385000, 420000, 425000, 410000,
                        430000, 435000, 480000
                    ]
                }
            ],

            xaxis: {
                categories: [
                    'Jan', 'Feb', 'Mar',
                    'Apr', 'Mei', 'Jun',
                    'Jul', 'Agu', 'Sep',
                    'Okt', 'Nov', 'Des'
                ]
            },

            legend: {
                position: 'top'
            },

            yaxis: {
                labels: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                }
            },

            tooltip: {
                y: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                }
            },

            grid: {
                borderColor: '#f1f1f1'
            },

            fill: {
                type: ['solid','pattern'],
                pattern: {
                    style: ['none', 'slantedLines'],
                    width: 6,
                    height: 6,
                    strokeWidth: 2
                },
            }
        }
    ).render();

});
</script>