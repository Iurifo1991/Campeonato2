<?php
include("conexao.php");

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Rodada', 'ADF', 'JK', 'Baráo', 'Azurra', 'CTS', 'ATR','União e Força','BDC'],
          ['01',  3,      0,         0,             0,           3,      0,3,3],
          ['02',  4,      1,        3,             0,          3,      1,6,4],
          ['03',  4,      1,        3,             0,           3,      1,6,4],
          ['04',  4,      1,        3,             0,           3,      1,6,4],
          ['05',  4,      1,         3,             0,          3,      1,6,4]
        ]);

        var options = {
          title : 'Evolução de pontos por rodada',
          vAxis: {title: 'Pontuação'},
          hAxis: {title: 'Rodada'},
          seriesType: 'bars',
          
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
