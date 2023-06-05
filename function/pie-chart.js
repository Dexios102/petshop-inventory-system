document.addEventListener('DOMContentLoaded', function() {
    // Line Chart Data
    var lineChartOptions = {
        series: [{
            name: 'Sales',
            data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
        }],
        chart: {
            height: 450,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        }
    };

    var lineChart = new ApexCharts(document.querySelector('#lineChart'), lineChartOptions);
    lineChart.render();

    // Pie Chart Data
    var pieChartOptions = {
        series: [44, 55, 13, 43, 22],
        chart: {
            width: 500,
            type: 'pie',
        },
        labels: ['Chrome', 'Firefox', 'Safari', 'Opera', 'Other'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 300
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var pieChart = new ApexCharts(document.querySelector('#pieChart'), pieChartOptions);
    pieChart.render();
});
