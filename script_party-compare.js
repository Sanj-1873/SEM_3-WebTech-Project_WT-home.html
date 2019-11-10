google.charts.load('current', {'packages':['corechart', "bar"]});
google.charts.setOnLoadCallback(drawCharts);
function drawPieChart(element, data, options){
    var chart = new google.visualization.PieChart(element);
    chart.draw(data, options);
}

function drawBarChart(element, data, options){
    var chart = new google.charts.Bar(element);
    chart.draw(data, options);
}

function drawCharts(){
    var pie_arr=document.getElementsByClassName("pie");
    var bar_arr=document.getElementsByClassName("bar");

    var pie_data = google.visualization.arrayToDataTable([
        ['Area', 'Money'],
        ['Education', 8],
        ['Infra', 2],
        ['Millitary', 2],
        ['Agriculture', 2],
        ['Automobile', 2],
        ['Telecom', 8]
    ]);
    var pie_options = {'title':'Party A', 'width':550, 'height':400};

    var bar_data = new google.visualization.arrayToDataTable([
        ['Year', 'Amount Speent'],
        ["2018", 44],
        ["2013", 31],
        ["2008", 12],
        ["2005", 10]
      ]);

      var bar_options = {
        title: 'Money by year',
        width: 250,
        height: 400,
        legend: { position: 'none' },
        chart: { title: 'Money by year',
                 subtitle: 'by government' },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top', label: 'Percentage'} // Top x-axis.
          }
        },
        bar: { groupWidth: "90%" }
      };
    for(i=0;i<pie_arr.length;i++)
        drawPieChart(pie_arr[i], pie_data, pie_options);
    for(i=0; i<bar_arr.length; i++)
        drawBarChart(bar_arr[i], bar_data, bar_options)
}