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
    var pie_options = [
        {
            title:'Party A', 
            width:550, 
            height:400, 
            backgroundColor: {fill: 'transparent'},
            animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },
            colors: ['#2E8B57','#556B2F','#3CB371','#6B8E23','#00FA9A','#00FF00']
        },
        {
            title:'Party B', 
            width:550, 
            height:400, 
            backgroundColor: {fill: 'transparent'},
            animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },
            colors: ['#FFC0CB','#FFB6C1','#FF69B4','#FF1493','#DB7093','#C71585']
        }
        
    ];

    var bar_data = [
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 44],
            ["2013", 31],
            ["2008", 12],
            ["2005", 10],
            ["2023 A", 14],
            ["2023 B", 19]
        ]),
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 34],
            ["2013", 37],
            ["2008", 32],
            ["2005", 30],
            ["2023 A", 41],
            ["2023 B", 46]
        ]),
        new google.visualization.arrayToDataTable([
            ['Year', 'Amount Speent'],
            ["2018", 64],
            ["2013", 21],
            ["2008", 72],
            ["2005", 80],
            ["2023 A", 81],
            ["2023 B", 76]
        ]),
    ];

    var col_options = [
        {
            width: 250,
            height: 300,
            backgroundColor: {fill: 'transparent'},
            animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },
            vAxis: {minValue:0, maxValue:100},
            colors: ["#FFD700","#FFD700","#FFD700","#FFD700","#008000","#FF69B4"]
        },
        {
            width: 250,
            height: 300,
            backgroundColor: {fill: 'transparent'},
            animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },
            vAxis: {minValue:0, maxValue:100},
            colors: ["#FFD700","#FFD700","#FFD700","#FFD700","#008000","#FF69B4"]
        },
        {
            width: 250,
            height: 300,
            backgroundColor: {fill: 'transparent'},
            animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },
            vAxis: {minValue:0, maxValue:100},
            colors: ["#FFD700","#FFD700","#FFD700","#FFD700","#008000","#FF69B4"]
        }
    ];
    for(i=0;i<pie_arr.length;i++)
        drawPieChart(pie_arr[i], pie_data[i], pie_options[i]);
    for(i=0; i<bar_arr.length; i++)
        drawBarChart(bar_arr[i], bar_data[i], col_options[i])
}