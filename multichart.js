const ctx = document.getElementById('multichart');

let myChart;
let jsonData;

fetch('./datacharts.json')
.then(function(response) {
 if (response.ok == true) {
    return response.json();
 }
})
.then (function(data){
   jsonData = data;
    createChart(data, 'bar');

});
function setChartType (chartType){
 myChart.destroy();
 createChart(jsonData, chartType);
}
function createChart(data,grafiektype ) {


myChart = new Chart(ctx, {
  type: grafiektype,
  data: {
    labels: data.map(row => row.maand),
    datasets: [{
      label: 'bedrag in euros',
      data: data.map(row => row.winst),
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
}
