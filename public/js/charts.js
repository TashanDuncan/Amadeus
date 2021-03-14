//Create Variables for Canvas
const trafficCanvas = document.getElementById('traffic-chart').getContext('2d');
const dailyCanvas  = document.getElementById('daily-chart').getContext('2d');
const mobileCanvas= document.getElementById('mobile-chart').getContext('2d');

// Traffic Chart Config
let trafficData = {
    labels: ["Wk1", "Wk2", "Wk3", "Wk4", "Wk5", "Wk6", "Wk7",
            "Wk8", "Wk9", "WK10", "WK11"],
    datasets: [{
        data: [750, 1250, 1000, 2000, 1500, 1750, 1250, 1850, 2250, 1500,
        2500],
        backgroundColor: 'rgba(116, 119, 191, .3)',
        borderWidth: 1,
    }]
};
let trafficOptions = {
    aspectRatio: 2.5,
    animation: {
        duration: 0
    },
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }]
    },
    legend : {
        display: false
    }
    };

let trafficChart = new Chart(trafficCanvas, {
    type: 'line',
    data: trafficData,
    options: trafficOptions
});


// Daily traffic Chart Config
const dailyData = {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
        label: '# of Hits',
        data: [75, 115, 175, 125, 225, 200, 100],
        backgroundColor: '#7477BF',
        borderWidth: 1
    }]
};
    
const dailyOptions = {
scales: {
    yAxes: [{
        ticks: {
            beginAtZero:true
        }
    }]
},
    legend : {
    display: false
    }
};

let dailyChart = new Chart(dailyCanvas, {
    type: 'bar',
    data: dailyData,
    options: dailyOptions
});

const mobileData = {
    labels: ["Desktop", "Tablet", "Phones"],
    datasets: [{
        label: '# of Users',
        data: [2000, 550, 500],
        borderWidth: 0,
        backgroundColor: [
            '#7477BF',
            '#78CF82',
            '#51B6C8'
        ]
    }]
};

const mobileOptions = {
    legend: {
        position: 'right',
        labels: {
        boxWidth: 20,
        fontStyle: 'bold'
        }
    }
};

let mobileChart = new Chart(mobileCanvas, {
    type: 'doughnut',
    data: mobileData,
    options: mobileOptions
});
    
//Updates to traffic charts

function hourlyUpdate () {
    trafficData.labels = [
        "00:00", 
        "01:00", 
        "02:00", 
        "03:00", 
        "04:00", 
        "05:00", 
        "06:00",
        "07:00", 
        "08:00", 
        "09:00", 
        "10:00",
        "11:00",
        "12:00",
        "13:00",
        "14:00",
        "15:00",
        "16:00",
        "17:00",
        "18:00",
        "19:00",
        "20:00",
        "21:00",
        "22:00",
        "23:00"
    ];

    trafficData.datasets[0] = {
        data: [
        2, 
        0, 
        3, 
        5, 
        0, 
        4, 
        5,
        4, 
        6, 
        15, 
        20,
        25,
        10,
        30,
        40,
        45,
        56,
        33,
        29,
        20,
        15,
        4,
        2,
        5
        ],
        backgroundColor: 'rgba(116, 119, 191, .3)',
        borderWidth: 1,
    };
    trafficChart.update();
}

function dailyUpdate () {
    trafficData.labels = dailyData.labels;
    trafficData.datasets[0] = {data: [75, 115, 175, 125, 225, 200, 100],
        backgroundColor: 'rgba(116, 119, 191, .3)',
        borderWidth: 1,
    };

    trafficChart.update();
}

function weeklyUpdate () {
    trafficData.labels = ["Wk1", "Wk2", "Wk3", "Wk4", "Wk5", "Wk6", "Wk7",
    "Wk8", "Wk9", "WK10", "WK11"];
    trafficData.datasets[0] = {data: [750, 1250, 1000, 2000, 1500, 1750, 1250, 1850, 2250, 1500,
        2500],
        backgroundColor: 'rgba(116, 119, 191, .3)',
        borderWidth: 1,
    };

    trafficChart.update();
}

function monthlyUpdate () {
    trafficData.labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",
    "Aug", "Sep", "Oct", "Nov", "Dec"];
    trafficData.datasets[0] = {data: [750*4, 1250*4, 1000*4, 2000*4, 1500*4, 1750*4, 1250*4, 1850*4, 2250*4, 1500*4,
        2500*4, 1690*4],
        backgroundColor: 'rgba(116, 119, 191, .3)',
        borderWidth: 1,
    };

    trafficChart.update();
}