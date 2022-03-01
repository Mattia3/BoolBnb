import Chart from 'chart.js/auto';

let m = document.getElementById('m').innerHTML;
console.log(m); // 2

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Messaggi',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, m, 2, 3, 4],
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
    document.getElementById('myChart'),
    config
);