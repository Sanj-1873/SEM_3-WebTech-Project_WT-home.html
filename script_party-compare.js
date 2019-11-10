google.charts.load('current', {'packages':['corechart', "bar"]});
google.charts.setOnLoadCallback(drawCharts);
function drawPieChart(element, data, options){
    var chart = new google.visualization.PieChart(element);
    chart.draw(data, options);
}

function drawBarChart(element, data, options){
    var chart = new google.visualization.ColumnChart(element);
    chart.draw(data, options);
}

function drawCharts(){
    var pie_arr=document.getElementsByClassName("pie");
    var bar_arr=document.getElementsByClassName("col");

    var pie_data = [
        google.visualization.arrayToDataTable([
            ['Area', 'Money'],
            ['Education', 8],
            ['Infra', 2],
            ['Millitary', 2],
            ['Agriculture', 2],
            ['Automobile', 2],
            ['Telecom', 8]
        ]),
        google.visualization.arrayToDataTable([
            ['Area', 'Money'],
            ['Education', 4],
            ['Infra', 3],
            ['Millitary', 7],
            ['Agriculture', 6],
            ['Automobile', 3],
            ['Telecom', 5]
        ]),
    ];
    var pie_options = {
        title:'Party A', 
        width:550, 
        height:400, 
        backgroundColor: {fill: 'transparent'},
        animation:{
            startup: true,
          duration: 1000,
          easing: 'out',
        }
    };

    var bar_data = [
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 44],
            ["2013", 31],
            ["2008", 12],
            ["2005", 10],
            ["2023", 14]
        ]),
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 34],
            ["2013", 37],
            ["2008", 32],
            ["2005", 30],
            ["2023", 41]
        ]),
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 64],
            ["2013", 21],
            ["2008", 72],
            ["2005", 80],
            ["2023", 81]
        ]),
    ];

      var col_options = {
        width: 250,
        height: 300,
        backgroundColor: {fill: 'transparent'},
        animation:{
            startup: true,
          duration: 1000,
          easing: 'out',
        },
        vAxis: {minValue:0, maxValue:100},
      };
    for(i=0;i<pie_arr.length;i++)
        drawPieChart(pie_arr[i], pie_data[i], pie_options);
    for(i=0; i<bar_arr.length; i++)
        drawBarChart(bar_arr[i], bar_data[i], col_options)
}