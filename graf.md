<html>
<title>Cyber4rt Pie Charts</title>
<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Visits');
data.addRows([
['Jakarta', 84000],
['Surabaya', 63600],
['Bandung', 52900],
['Yogyakarta', 48300],
['Semarang', 38200],
['Medan', 24700],
['Makassar', 14500],
['Depok', 2900],
['Kuala Lumpur', 2800]
]);
var options = {'title':'Demographics City visitors for Cyber4rt',
'width':400,
'height':300};
var chart = new google.visualization.PieChart(document.getElementById('cyber4rt_chart'));
chart.draw(data, options);
}
</script>
</head>
<body>
<div id="cyber4rt_chart"></div>
</body>
</html>
