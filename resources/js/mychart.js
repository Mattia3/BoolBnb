import Chart from 'chart.js/auto';

let m = document.getElementById('m').innerHTML;
let a = document.getElementById('a').innerHTML;
a = JSON.parse('[' + a + ']'); // 2

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Messaggi',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: a,
    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById('myNewChart'),
    config
);