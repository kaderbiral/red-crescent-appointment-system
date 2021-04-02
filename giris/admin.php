<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
<ul>
  <li><a class="active" target="blank"><b>GRAFIKLER</b></a></li>
  
  <li><a href="chart.php" target="blank">Medeni Hal</a></li>
 
  <li><a href="chart2.php" target="blank">Egitim Durumu</a></li>
 
  <li><a href="chart5.php" target="blank">Ilce</a></li>
  
  <li><a href="chart3.php" target="blank">Dogum Yeri</a></li>
 
  <li><a href="">Sube</a></li>
  	
	<li><a href="">Cinsiyet</a></li>
	
	<li><a href="">Yas</a></li>
</ul>
 
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 
 
 <h3 class="baslik">KAN BAGISCISI KAYIT FORMU</h3><br>
 
<?php
$con = mysqli_connect('localhost','root','') or die ("Baðlantý baþarýsýz");
mysqli_select_db($con,'kizilay') or die ("veritabaný hatasý");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from soru");
echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="300" bgcolor="#E7E7E7"><b>SORU ID</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>TC KIMLIK</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>ADI SOYADI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>BABA ADI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>DOGUM TARIHI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>DOGUM YERI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>CINSIYET</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>MEDENI HAL</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>EGITIM DURUMU</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>MESLEK</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>KAN BAGISI GECMISI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>ADRES</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>EV TEL</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>IS TEL</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>CEP TEL</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>BILGILENDIRME ISTEME</b></td>
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["soru_id"].'</td>
		<td>'.$cek["tc_kimlik"].'</td>
		<td>'.$cek["ad_soyad"].'</td>
		<td>'.$cek["baba_adi"].'</td>
		<td>'.$cek["dogum_tarihi"].'</td>
		<td>'.$cek["dogum_yeri"].'</td>
		<td>'.$cek["cinsiyet"].'</td>
		<td>'.$cek["medeni_hal"].'</td>
		<td>'.$cek["egitim_durumu"].'</td>
		<td>'.$cek["meslek"].'</td>
		<td>'.$cek["kan_bagisi_gecmisi"].'</td>
		<td>'.$cek["adres"].'</td>
		<td>'.$cek["ev_no"].'</td>
		<td>'.$cek["is_no"].'</td>
		<td>'.$cek["cep_no"].'</td>
		<td>'.$cek["bilgilendirme_isteme"].'</td>
	</tr>';}
echo '</table>';


?>

</body>
</html>