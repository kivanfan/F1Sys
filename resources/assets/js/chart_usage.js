var ctx = document.getElementById("sample-1");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green"],
        datasets: [{
            label: '# of Votes',
            data: [12, 9, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
    options:{
        legend:{
            display:false
        },
        cutoutPercentage:45
    }
});