// Include FusionCharts core file
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

// Include FusionCharts Theme file
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<?php
include("includes/fusioncharts.php");
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "Politic";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$columnChart = new FusionCharts("column2d", "ex1", "100%", 400, "chart-1", "json", '{
  "chart": {
    "caption": "Countries With Most Oil Reserves [2017-18]",
    "subcaption": "In MMbbl = One Million barrels",
    "xaxisname": "Country",
    "yaxisname": "Reserves (MMbbl)",
    "numbersuffix": "K",
    "theme": "fusion"
  },
  "data": [
    {
      "label": "Venezuela",
      "value": "290"
    },
    {
      "label": "Saudi",
      "value": "260"
    },
    {
      "label": "Canada",
      "value": "180"
    },
    {
      "label": "Iran",
      "value": "140"
    },
    {
      "label": "Russia",
      "value": "115"
    },
    {
      "label": "UAE",
      "value": "100"
    },
    {
      "label": "US",
      "value": "30"
    },
    {
      "label": "China",
      "value": "30"
    }
  ]
}');

$columnChart->render();
?>