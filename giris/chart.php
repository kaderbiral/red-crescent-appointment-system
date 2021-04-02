<?php
$conn = new mysqli('localhost','root','','kizilay');
$laki_laki = $conn->query("SELECT * FROM soru WHERE medeni_hal='Evli'");
$perempuan = $conn->query("SELECT * FROM soru WHERE medeni_hal='Bekar'");

$jumlah_laki_laki = mysqli_num_rows($laki_laki);
$jumlah_perempuan = mysqli_num_rows($perempuan);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Medeni hal', 'Jumlah'],
          ['Evli',     <?php echo $jumlah_perempuan; ?> ],
          ['Bekar',     <?php echo $jumlah_laki_laki; ?> ],
        ]);

        var options = {
          title: 'Medeni Hal'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>



