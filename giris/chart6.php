<?php
$conn = new mysqli('localhost','root','','kizilay');
$alsancak_kab = $conn->query("SELECT * FROM sube WHERE sube_adi='Alsancak KAB'");
$buca_kiz = $conn->query("SELECT * FROM sube WHERE sube_adi='Buca Kız Öğrenci Yurdu'");
$cigli_celik = $conn->query("SELECT * FROM sube WHERE sube_adi='Çiğli Çelik AVM Önü'");
$konak_meydan = $conn->query("SELECT * FROM sube WHERE sube_adi='Konak Meydanı'");
$torbali_meydan = $conn->query("SELECT * FROM sube WHERE sube_adi='Torbalı Meydan'");

$jumlah_alsancak_kab = mysqli_num_rows($alsancak_kab);
$jumlah_buca_kiz = mysqli_num_rows($buca_kiz);
$jumlah_cigli_celik = mysqli_num_rows($cigli_celik);
$jumlah_konak_meydan = mysqli_num_rows($konak_meydan);
$jumlah_torbali_meydan = mysqli_num_rows($torbali_meydan);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Şubeler', 'Jumlah'],
          ['Alsancak KAB',     <?php echo $jumlah_alsancak_kab; ?> ],
          ['Buca Kız Öğrenci Yurdu',     <?php echo $jumlah_buca_kiz; ?> ],
		  ['Çiğli Çelik AVM Önü',        <?php echo $jumlah_cigli_celik; ?> ],
		  ['Konak Meydanı',        <?php echo $jumlah_konak_meydan; ?> ],
		  ['Torbalı Meydan',      <?php echo $jumlah_torbali_meydan; ?> ],
        ]);

        var options = {
          title: 'Şubeler'
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



