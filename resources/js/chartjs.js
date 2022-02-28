import Chart from 'chart.js/auto'

/* import {   Chart,   ArcElement,   LineElement,   BarElement,   PointElement,   BarController,   BubbleController,   DoughnutController,   LineController,   PieController,   PolarAreaController,   RadarController,   ScatterController,   CategoryScale,   LinearScale,   LogarithmicScale,   RadialLinearScale,   TimeScale,   TimeSeriesScale,   Decimation,   Filler,   Legend,   Title,   Tooltip,   SubTitle } from 'chart.js';
 */


let myChart = document.getElementById('myChart').getContext('2d');
let messages = document.getElementById('messages').innerHTML;
let apartments = document.getElementById('apartments');
console.log(apartments);
let chart = new Chart( myChart, {
    type: 'bar',
    data: {
        labels: [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'Semptember',
            'October', 
            'November', 
            'December'
        ],

        datasets: [{
            label: 'Months',
  /*           data: , */
            backgroundColor: 'green', 
            borderWidth: 1,
            borderColor: '#777'
        }]
    },

    options: {
        title: {
            display: true
        }
    }
})

function recuperoDate() {
    let dates = []
    apartments.forEach(apartment => {
        apartment.messages.forEach(message => {
            dates.push(message.created_at);
        });
        
        //console.log(apartment.messages);
    });

    return dates;
}

console.log(recuperoDate())


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
    label: 'My First dataset',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [0, 10, 5, 2, 20, 30, 45],
}]
};

const config = {
type: 'line',
data: data,
options: {}
};




