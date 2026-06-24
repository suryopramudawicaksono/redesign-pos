<div class="flex items-end gap-2 px-6 py-2">
    <x-date-range />
    <x-button>Tampilkan</x-button>
</div>

<div class="grid grid-cols-1 gap-4 sm:grid-cols-3 p-6">

    <x-card title="Total Utang (Belum Dibayar)" value="Rp 100.500" color="danger">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg>
        </x-slot:icon>
    </x-card>

</div>

<div class="px-6">
    <x-chart id="utang-chart" title="Laporan Utang" />
</div>

<!-- Table -->
<x-datatable title="Laporan Utang">

    <x-slot:actions>
        <div class="flex items-start pb-1">
            <h3 class="font-semibold text-foreground">
                Daftar Utang (Belum Dibayar)
            </h3>
        </div>
    </x-slot:actions>

    <x-slot:sides>

        <x-button variant="secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            Export to Excel
        </x-button>

    </x-slot:sides>

    <x-slot:head>

        <x-table-th>No</x-table-th>
        <x-table-th>Tanggal</x-table-th>
        <x-table-th>No Invoice</x-table-th>
        <x-table-th>Nama Pemasok</x-table-th>
        <x-table-th>Nominal Utang</x-table-th>
        <x-table-th class="sr-only">Aksi</x-table-th>

    </x-slot:head>

</x-datatable>
<!-- End Table -->


<script>
document.addEventListener('DOMContentLoaded', function() {

    new ApexCharts(
        document.querySelector("#utang-chart"), {
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
                '#EF4444',
            ],

            series: [{
                name: 'Utang',
                data: [120000, 90000, 110000, 100000, 80000, 95000, 97000, 105000, 99000, 98000,
                    115000, 120000
                ]
            }, ],

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