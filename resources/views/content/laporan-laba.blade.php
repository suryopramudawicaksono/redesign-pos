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
                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
            </svg>
        </x-slot:icon>
    </x-card>

    <x-card title="Total Pengeluaran" value="Rp 100.500" color="danger">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg>
        </x-slot:icon>
    </x-card>

    <x-card title="Laba Bersih" value="Rp 314.500" color="success">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </x-slot:icon>
    </x-card>

</div>

<div class="px-6">
    <x-chart id="laba-chart" title="Laporan Laba Bersih" />
</div>


<!-- Chart Dummy -->
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
                type: ['solid', 'pattern'],
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