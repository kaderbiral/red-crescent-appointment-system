<?php
$conn = new mysqli('localhost','root','','kizilay');
$kadin = $conn->query("SELECT * FROM soru WHERE cinsiyet='Kadın'");
$erkek = $conn->query("SELECT * FROM soru WHERE cinsiyet='Erkek'");

$jumlah_kadin = mysqli_num_rows($kadin);
$jumlah_erkek = mysqli_num_rows($erkek);

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
          ['Kadın',     <?php echo $jumlah_kadin; ?> ],
          ['Erkek',     <?php echo $jumlah_erkek; ?> ],
        ]);

        var options = {
          title: 'Cinsiyet'
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



