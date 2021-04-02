<!doctype html>
<html>
<head>
<title>Kızılay Randevu Sistemi</title>
	<meta charset="utf-8">
	<meta name="description" content="Kızılay Randevu Sistemi">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keyword" content="kızılay,randevu,kızılay randevu,kızılay sistem,kızılay randevu sistemi">
	<meta name="author" content="ybs, kizilay_randevu.com">
	<meta name="revisit-after" content="7">
	<meta name="abstract" content="Kızılay Randevu Sistemi">
	<meta name="content-language" content="tr">
	<meta name="language" content="Turkish" >
	<meta name="copyright" content="(c) 2018 kizilay.com Tüm Hakları Saklıdır.">
	<meta name="distribution" content="local">
	<meta name="rating" content="General">
	<meta name="publisher" content="Kızılay" >	
<link href="css/randevu_giris.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body{
	margin-right: 0px;
	margin-left: 0px;
	margin-bottom: 0px;
	margin-top: 0px;
}
	</style>
	
<script>
/*function myFunction() {
    window.location.href = "bagisci_kayit.php";
}*/
</script>	

	
<script type="text/javascript">

function sadecesayi(e) { 
var k; 
document.all ? k = e.keyCode : k = e.which; 
return ((k > 47 && k < 58) || k == 8 || k==13 || k==9); 
}

</script>	
	
</head>

<body>
	
<div id="container">
	
		
	  <div id="MenuHolder">
		  
		  <nav>
		  <ul>
			  <li><img src="img/logokzly.png" width="85" height="60" alt=""/></li>
			  <a href="anasayfa.php"><li title="anasayfa">ANASAYFA</li></a>
			  <a href="kurumsal.php"><li title="kurumsal">KURUMSAL</li></a>
			  <a href="subeler.php"><li title="subeler">ŞUBELER</li></a>
			  <a href="randevu_giris.php"><li title="randevu">RANDEVU AL</li></a>
			  <a href="sss.php"><li title="sss">S.S.S.</li></a>
			  <li title="arama"><font color="#490A0B">| </font><img src="img/arama.png" width="25" height="25" align="center" alt=""/> <font color="#490A0B">| </font></li>
			  <a href="DİLLER.php"><li title="diller">TR  |  EN  |  آرآپچآ</li></a>
		  </ul>
		  </nav>
	
	  </div>
		

	
<div class="banner">
		
		<div id="captioned-gallery">
		<figure class="slider">
			<figure>
				<img src="img/kan.png" width="1000" height="430" alt=""/>
			<figcaption>KAN ACİL DEĞİL SÜREKLİ İHTİYAÇTIR!</figcaption>	
			</figure>
			<figure>
				<img src="img/kan1.jpg" width="1000" height="430" alt=""/>
			<figcaption>1 DK. İÇİN HAREKETE GEÇİN.</figcaption>	
			</figure>
			<figure>
				<img src="img/mesaj.jpg" width="1000" height="430" alt=""/>
			<figcaption>ALDIĞINIZ EN ANLAMLI MESAJ BU OLABİLİR.</figcaption>	
			</figure>			
			<figure>
				<img src="img/kan3.png" width="1000" height="430" alt=""/>
			<figcaption>İYİLİĞE DOSTLUĞA KAN BAĞIŞINA.</figcaption>		
			</figure>			
			<figure>
				<img src="img/kan2.jpg" width="1000" height="430" alt=""/>
			<figcaption>KANIMIZDA VAR.</figcaption>			
			 </figure>	
			</figure>
		</div>
</div>	
		
 <div id="content">
	 
	 	<div class="icerik">
			
			<form id="form2" name="form2" method="post"> 
					  <label><center><b><font color="#c10100">KAN BAĞIŞÇISI KAYIT FORMU</font></b></center></label><br><br>
					  <label><b><font color="#c10100">Kan Bağışçısı Adayının Kimlik Bilgileri</font></b></label><br><br>
					  <table width="561" border="0">
							<tbody>
							  <tr>
								<td width="171">T.C. Kimlik Numaranız</td>
								<td width="12">:</td>
								<td width="189"><input name="tc" type="text" id="textfield5" maxlength="11" required="required" onkeypress="return sadecesayi(event);"></td>
								
							  </tr>
							  <tr>
								<td>Adınız Soyadınız</td>
								<td>:</td>
								<td><input name="ad_soyad" type="text" id="textfield" maxlength="50" required="required"></td>
							  </tr>
							  <tr>
								<td>Baba Adınız</td>
								<td>:</td>
								<td><input name="baba_adi" type="text" id="textfield2" required="required"></td>
							  </tr>
							  <tr>
								<td>Doğum Tarihiniz</td>
								<td>:</td>
								<td>
                                <input type="date" name="dogum_tarihi" id="date"></td>
							  </tr>
							  <tr>
								<td>Doğum Yeriniz (İl)</td>
								<td>:</td>
								<td><select name="dogum_yeri">
								 <option selected="" value="none"> Doğum yerini seçiniz.</option>
								<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "kizilay";

										// Create connection
										$conn = new mysqli($servername, $username, $password, $dbname);
										mysqli_query($conn,"SET NAMES UTF8");
										// Check connection
										if ($conn->connect_error) {
											die("Connection failed: " . $conn->connect_error);
										} 

										$sql = "SELECT * FROM il ";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
										?>
										
										  <option value="<?php  echo $row["il_id"]?>"><?php  echo $row["il_adi"]?></option>
									
										  
										  <?php
										  	}
										} else {
											echo "0 results";
										}
										$conn->close();
									?>
									</select>

								</td>
								<td width="171">&nbsp;</td>
							  </tr>
							  <tr>
								<td colspan="4">&nbsp;</td>
							  </tr>
							  <tr>
								<td colspan="4"><b><font color="#c10100">Kan Bağışçısı Adayının Kişisel Bilgileri</font></b></td>
							  </tr>
							  <tr>
							    <td colspan="4">&nbsp;</td>
						      </tr>
							  <tr>
								<td>Cinsiyetiniz</td>
								<td>:</td>
								<td><input type="radio" name="cinsiyet" id="radio" value="Kadın">
                                <label for="radio">Kadın</label></td>
								<td><input type="radio" name="cinsiyet" id="radio1" value="Erkek">
                                <label for="radio1">Erkek</label></td>
							  </tr>
							  <tr>
								<td>Medeni Haliniz</td>
								<td>:</td>
								<td><input type="radio" name="medeni_hal" id="radio2" value="Evli">
                                <label for="radio2">Evli</label></td>
								<td><input type="radio" name="medeni_hal" id="radio3" value="Bekar">
                                <label for="radio3">Bekar</label></td>
							  </tr>
							  <tr>
								<td>Eğitim Durumunuz</td>
								<td>:</td>
								<td><input type="radio" name="egitim_durumu" id="radio4" value="Yok">
                                <label for="radio4">Yok</label></td>
								<td><input type="radio" name="egitim_durumu" id="radio5" value="İlkokul">
                                <label for="radio5">İlkokul</label></td>
							  </tr>
							  <tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="radio" name="egitim_durumu" id="radio6" value="Ortaokul">
                                <label for="radio6">Ortaokul </label></td>
								<td><input type="radio" name="egitim_durumu" id="radio7" value="Lise">
                                Lise
                                  <label for="radio7"></label></td>
							  </tr>
							  <tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="radio" name="egitim_durumu" id="radio8" value="Önslisans">
                                <label for="radio8">Önlisans </label></td>
								<td><input type="radio" name="egitim_durumu" id="radio9" value="Lisans">
                                <label for="radio9">Lisans</label></td>
							  </tr>
							  <tr>
								<td height="29">&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="radio" name="egitim_durumu" id="radio10" value="Yüksek Lisans">
                                <label for="radio10">Yüksek Lisans</label></td>
								<td><input type="radio" name="egitim_durumu" id="radio11" value="Doktora">
                                <label for="radio11">Doktora </label></td>
							  </tr>
							  <tr>
								<td height="39">Mesleğiniz</td>
								<td>:</td>
								<td><input name="meslek" type="text" id="textfield4" required="required"></td>
							  </tr>
							  <tr>
								<td height="58">Kan Bağışı Geçmişiniz</td>
								<td>:</td>
								<td><input type="radio" name="kan_gecmisi" id="radio12" value=" İlk Kez Kan Bağışlıyorum.">
                                İlk Kez Kan Bağışlıyorum.
                                <label for="radio12"></label></td>
								  <td><input type="radio" name="kan_gecmisi" id="radio13" value="Önce Kan Bağışı Yaptım.">
                                Önce Kan Bağışı Yaptım.
                                <label for="radio13"></label></td>
							  </tr>
							  <tr>
								<td height="58">Adresiniz</td>
								<td>:</td>/
								<td><textarea name="adres" id="textarea" required="required"></textarea></td>
							  </tr>
							  <tr>
								<td>Ev Telefonu Numaranız</td>
								<td>:</td>
								<td><input name="tel" type="tel" id="tel" required="required" maxlength="11" placeholder="(___) ___-____" title="Lütfen istenen formatta yazın." onkeypress="return sadecesayi(event);"></td>
							  </tr>
							  <tr>
								<td>İş Telefonu Numaranız</td>
								<td>:</td>
								<td><input name="tel2" type="tel" id="tel2" required="required" maxlength="11" placeholder="(___) ___-____" title="Lütfen istenen formatta yazın." onkeypress="return sadecesayi(event);"></td>
							  </tr>
							  <tr>
								<td>Cep Telefonu Numaranız</td>
								<td>:</td>
								<td><input name="tel3" type="tel" id="tel3" required="required"maxlength="11" placeholder="(5__) ___-____" title="Lütfen istenen formatta yazın." onkeypress="return sadecesayi(event);"></td>
							  </tr>
							</tbody>
					</table>
					  <br><br><br>
					  <table width="561" border="0">
							<tbody>
							  <tr>
								<td>Bir sonraki kan bağış tarihiniz yaklaştığında kurumumuz tarafından kısa mesajla bilgilendirilmek istiyor musunuz?</td>
							  </tr>
							</tbody>
					  </table><br>
					  
					  <table width="561" border="0">
							<tbody>
								<tr>
								<td width="192"><input type="radio" name="bilgilendirme" id="radio14" value="EVET">
                                EVET
                                <label for="radio14"></label></td>
								<td width="192"><input type="radio" name="bilgilendirme" id="radio15" value="HAYIR">
                                HAYIR
                                <label for="radio15"></label></td>	
							  </tr>
							</tbody>
					  </table>
					  <table width="561" border="0">
							<tbody>
								<tr>
									<td height="50" align="right" valign="middle"><input type="submit" name="submit2" id="submit2" value="Onay" class="btn"> </td>
							   </tr>
							</tbody>
					  </table>
					  
					
					  <?php
include("baglan.php");
if($_POST)
{
$tc_kimlik=$_POST["tc"];
$ad_soyad=$_POST["ad_soyad"];
$baba_adi=$_POST["baba_adi"];
$dogum_tarihi=$_POST["dogum_tarihi"];
$dogum_yeri=$_POST["dogum_yeri"];
$cinsiyet=$_POST["cinsiyet"];
$medeni_hal=$_POST["medeni_hal"];
$egitim_durumu=$_POST["egitim_durumu"];
$meslek=$_POST["meslek"];
$kan_bagisi_gecmisi=$_POST["kan_gecmisi"];
$adres=$_POST["adres"];
$ev_no=$_POST["tel"];
$is_no=$_POST["tel2"];
$cep_no=$_POST["tel3"];
$bilgilendirme_isteme=$_POST["bilgilendirme"];






$sql="insert into soru(tc_kimlik, ad_soyad, baba_adi, dogum_tarihi, dogum_yeri, cinsiyet, medeni_hal, egitim_durumu, meslek,kan_bagisi_gecmisi, adres, ev_no, is_no, cep_no, bilgilendirme_isteme ) values('".$tc_kimlik."','".$ad_soyad."','".$baba_adi."','".$dogum_tarihi."','".$dogum_yeri."','".$cinsiyet."','".$medeni_hal."','".$egitim_durumu."','".$meslek."','".$kan_bagisi_gecmisi."','".$adres."','".$ev_no."','".$is_no."','".$cep_no."','".$bilgilendirme_isteme."')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
					 					  
					  
					  
					  
				  </form>
				  <form id="form3" name="form3" method="post" action="bagisci_kayit.php">
					  <table width="561" border="0">
							<tbody>
								<tr>
									<td height="50" align="right" valign="middle"><input type="submit" name="submit3" id="submit3" value="İleri" class="btn"> </td>
							   </tr>
							</tbody>
					  </table>
				  </form>
	 	</div>
		
	 
	 
	  
	 	
	 	<div class="kayit">
		
			<label><b><center><font color="#c10100">NELER YAPIYORUZ?</font></center></b></label><hr><br>
	
			<ul class="solMenu">
			
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Neler Yapıyoruz?</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Ulusal Afet Yönetimi</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Kan Hizmetleri</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Uluslararası Yardımlar</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Sosyal Hizmetler</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Sağlık Hizmetleri</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;İlk Yardım</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Eğitim ve Gençlik Hizmetleri</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Göç ve Mülteci Hizmetleri</a></li>
				<li><a href="#"><b>✓</b>&nbsp;&nbsp;&nbsp;Mineralli Su İşletmeleri</a></li>
			
			</ul>
			
	 	</div>
	 
	 	
	 	<div class="duyurular">
			
			
				<label><b><center><font color="#c10100">DUYURULAR</font></center></b></label><hr><br><br>
				
				<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="60" loop="99999" align="middle" direction="up" class="kayanYazi">
					
				<a href="hakim.php" class="link">Hakim ve Savcı Eğitim Merkezinden Kan Bağışına Büyük Destek</a><br><br><br>
				
				<a href="gonullu.php" class="link">Gönüllü Kan Bağışçılarına Bursa’da Madalya Takdimi</a><br><br><br>
				
				<a href="kan_bagisi.php" class="link">Kızılay Haftasında 81 İlde Eş Zamanlı Kan Bağışı</a><br><br><br>
				
				<a href="bagis_ligi.php" class="link">Kan Bağışı Ligi’nde 180.964 Kan Bağışı</a></marquee>
	
	 	</div>
		
		<div class="gif">
			
			<img src="img/gif.jpg" alt=""/>
	 	
	 	</div>
	 
	 	
	 <div style="clear: both"></div>
	 
	 	
</div>	 
		
		<br><br><br>
	
  		<div class="footer">
			
			<p>© Türk Kızılayı. Tüm hakları saklıdır.</p>
		
		</div>
 	  	  
	
</div>
	
</body>
</html>