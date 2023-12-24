const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2019', '2020', '2021'],
        datasets: [
            {
                label: 'Programs',
                data: [11203111, 10682495, 10298971],
                backgroundColor: '#2D68F8',
            },
            {
                label: 'Fundraising',
                data: [1475228, 1742809, 2047717],
                backgroundColor: '#8646F4',
            },
            {
                label: 'Management & Admin',
                data: [1386222, 1171112, 1107177],
                backgroundColor: '#D345F8',
            },
            {
                label: 'Other',
                data: [0, 0, 431161],
                backgroundColor: '#01A9DB',
            }
        ]
    },
    options: {
        plugins: {
            title: {
                display: false,
                text: 'Chart.js Bar Chart - Stacked'
            },
            legend: {
                position: 'bottom',
                align: 'start',
                usePointStyle: true, // Set to true to use point style (square)
                labels: {
                    boxWidth: 12, // Adjust the box width as needed
                }
            },
            tooltip: {
                callbacks: {
                    label: function (context) {
                        var label = context.dataset.label || '';
                        if (label) {
                            label += ': $';
                        }
                        label += context.formattedValue + '';
                        return label;
                    }
                }
            },
        },
        responsive: true,
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true,
                ticks: {
                    callback: function (value) {
                        return value.toLocaleString();
                    }
                }
            }
        }
    }
});