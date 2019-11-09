google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawCharts);
function drawPieChart(element, data, options){
    var chart = new google.visualization.PieChart(element);
    chart.draw(data, options);
}

function drawColumnChart(element, data){
    var chart = new google.charts.Bar(element);
    var dat=google.visualization.arrayToDataTable(data)
    chart.draw()
}

function drawCharts(){
    var pie_arr=document.getElementsByClassName("pie");
    var col_arr=document.getElementsByClassName("bar");

    var pie_data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 8],
        ['Friends', 2],
        ['Eat', 2],
        ['TV', 2],
        ['Gym', 2],
        ['Sleep', 8]
    ]);
    var pie_options = {'title':'My Average Day', 'width':550, 'height':400};

    var col_data = [
        ['Element', 'Density', { role: 'style' }, { role: 'annotation' } ],
        ['Copper', 8.94, '#b87333', 'Cu' ],
        ['Silver', 10.49, 'silver', 'Ag' ],
        ['Gold', 19.30, 'gold', 'Au' ],
        ['Platinum', 21.45, 'color: #e5e4e2', 'Pt' ]];

    var col_options = {
        chart: {
          title: 'Population of Largest U.S. Cities',
          subtitle: 'Based on most recent and previous census data'
        },
        hAxis: {
          title: 'Total Population'
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal',
        series: {
            0: {axis: '2010'},
            1: {axis: '2000'}
        },
        axes: {
            x: {
                2010: {label: '2010 Population (in millions)', side: 'top'},
                2000: {label: '2000 Population'}
            }
        }
    };
    for(i=0;i<pie_arr.length;i++)
        drawPieChart(pie_arr[i], pie_data, pie_options);
    for(i=0; i<bar_ray.length; i++)
        drawColumnChart(col_arr[i], col_data, col_ptions)
}