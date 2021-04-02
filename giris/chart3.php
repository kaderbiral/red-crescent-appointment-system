<?php
$conn = new mysqli('localhost','root','','kizilay');
$adana = $conn->query("SELECT * FROM soru WHERE dogum_yeri='01'");
$izmir = $conn->query("SELECT * FROM soru WHERE dogum_yeri='35'");
$istanbul = $conn->query("SELECT * FROM soru WHERE dogum_yeri='34'");
$canakkale = $conn->query("SELECT * FROM soru WHERE dogum_yeri='17'");
$eskisehir = $conn->query("SELECT * FROM soru WHERE dogum_yeri='26'");

$jumlah_adana = mysqli_num_rows($adana);
$jumlah_adana = mysqli_num_rows($izmir);
$jumlah_izmir = mysqli_num_rows($istanbul);
$jumlah_istanbul = mysqli_num_rows($canakkale);
$jumlah_eskisehir = mysqli_num_rows($eskisehir);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Doğum Yeri', 'Jumlah'],
          ['01',     <?php echo $jumlah_adana; ?> ],
          ['35',     <?php echo $jumlah_adana; ?> ],
		  ['34',     <?php echo $jumlah_izmir; ?> ],
		  ['17',     <?php echo $jumlah_istanbul; ?> ],
		  ['26',     <?php echo $jumlah_eskisehir; ?> ],
        ]);

        var options = {
          title: 'Doğum Yeri'
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
