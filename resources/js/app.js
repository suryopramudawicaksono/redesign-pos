import ApexCharts from 'apexcharts';
window.ApexCharts = ApexCharts;

import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';

import 'preline';
import './theme';

window.addEventListener('load', () => {
    window.HSStaticMethods?.autoInit();

    flatpickr('.datepicker', {
        dateFormat: 'd/m/Y',
        defaultDate: 'today',
    });
});