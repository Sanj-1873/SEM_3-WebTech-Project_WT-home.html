google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(elem){
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work', 8],
    ['Friends', 2],
    ['Eat', 2],
    ['TV', 2],
    ['Gym', 2],
    ['Sleep', 8]
  ]);
  
    // Optional; add a title and set the width and height of the chart
    var options = {'title':'My Average Day', 'width':550, 'height':400};
  
    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(elem);
    chart.draw(data, options);
}

var pie_arr=document.getElementsByClassName("pie");
var bar_ray=document.getElementsByClassName("bar");

for(i=0;i<pie_arr.length;i++)