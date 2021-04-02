<?php
$conn = new mysqli('localhost','root','','kizilay');
$alsancak = $conn->query("SELECT * FROM ilce WHERE ilce_adi='Alsancak'");
$buca = $conn->query("SELECT * FROM ilce WHERE ilce_adi='Buca'");
$cigli = $conn->query("SELECT * FROM ilce WHERE ilce_adi='Çiğli'");
$konak = $conn->query("SELECT * FROM ilce WHERE ilce_adi='Konak'");
$torbali = $conn->query("SELECT * FROM ilce WHERE ilce_adi='Torbalı'");

$jumlah_alsancak = mysqli_num_rows($alsancak);
$jumlah_buca = mysqli_num_rows($buca);
$jumlah_cigli = mysqli_num_rows($cigli);
$jumlah_konak = mysqli_num_rows($konak);
$jumlah_torbali = mysqli_num_rows($torbali);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['İlçe', 'Jumlah'],
          ['Alsancak',     <?php echo $jumlah_alsancak; ?> ],
          ['Buca',     	   <?php echo $jumlah_buca; ?> ],
		  ['Çiğli',        <?php echo $jumlah_cigli; ?> ],
		  ['Konak',        <?php echo $jumlah_konak; ?> ],
		  ['Torbalı',      <?php echo $jumlah_torbali; ?> ],
        ]);

        var options = {
          title: 'İlçe'
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



