<?php
$conn = new mysqli('localhost','root','','kizilay');
$dogum_tarihi = $conn->query("SELECT TIMESTAMPDIFF(YEAR, dogum_tarihi, CURDATE()) FROM `soru`;");


$jumlah_dogum_tarihi = mysqli_num_rows($dogum_tarihi);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Cinsiyet', 'Jumlah'],
          ['Doğum Tarihi',     <?php echo $jumlah_dogum_tarihi; ?> ],
        ]);

        var options = {
          title: 'Doğum Tarihi'
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



