<?php
$conn = new mysqli('localhost','root','','kizilay');
$yok = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Yok'");
$ilkokul = $conn->query("SELECT * FROM soru WHERE egitim_durumu='İlkokul'");
$ortaokul = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Ortaokul'");
$lise = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Lise'");
$lisans = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Lisans'");
$onlisans = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Önlisans'");
$yukseklisans = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Yüksek Lisans'");
$doktora = $conn->query("SELECT * FROM soru WHERE egitim_durumu='Doktora'");

$jumlah_yok = mysqli_num_rows($yok);
$jumlah_ilkokul = mysqli_num_rows($ilkokul);
$jumlah_ortaokul = mysqli_num_rows($ortaokul);
$jumlah_lise = mysqli_num_rows($lise);
$jumlah_lisans = mysqli_num_rows($lisans);
$jumlah_onlisans = mysqli_num_rows($onlisans);
$jumlah_yukseklisans = mysqli_num_rows($yukseklisans);
$jumlah_doktora = mysqli_num_rows($doktora);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Eğitim Durumu', 'Jumlah'],
          ['Yok',     <?php echo $jumlah_yok; ?> ],
          ['İlkokul',     <?php echo $jumlah_ilkokul; ?> ],
		  ['Ortaokul',     <?php echo $jumlah_ortaokul; ?> ],
		  ['Lise',     <?php echo $jumlah_lise; ?> ],
		  ['Lisans',     <?php echo $jumlah_lisans; ?> ],
		  ['ÖnLisans',     <?php echo $jumlah_onlisans; ?> ],
		  ['Yüksek Lisans',     <?php echo $jumlah_yukseklisans; ?> ],
		  ['Doktora',     <?php echo $jumlah_doktora; ?> ],
        ]);

        var options = {
          title: 'Eğitim Durumu'
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
