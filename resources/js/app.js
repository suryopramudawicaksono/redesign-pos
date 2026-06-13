import ApexCharts from 'apexcharts';

window.ApexCharts = ApexCharts;

import 'preline';
import './theme';

window.addEventListener('load', () => {
    window.HSStaticMethods?.autoInit();
});