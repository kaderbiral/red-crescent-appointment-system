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
<link href="css/bagisci_sorgulama.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body{
	margin-right: 0px;
	margin-left: 0px;
	margin-bottom: 0px;
	margin-top: 0px;
}
	</style>
		
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
			  <a href="randevu_al.php"><li title="randevu">RANDEVU AL</li></a>
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
		    <label><center><b><font color="#c10100">RANDEVU AL</center></b></font></label><br><br>
		    <table width="700" border="0">
			    <tbody>
			      <tr>
			        <td width="107" height="40">İl seçiniz</td>
			        <td width="26">:</td>
					<td width="553">
					<select name="il" required="required" title="il seçin." class="acilir_menu">
                    <option selected="" value="none">Seçiniz...</option>	
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
		          </tr>
			      <tr>
			        <td height="41">İlçe Seçiniz</td>
			        <td>:</td>
			        <td>
					<select name="ilce" required="required" title="ilce seçin." class="acilir_menu">
                    			  <option selected="" value="none">Seçiniz...</option>	
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

							$sql = "SELECT * FROM ilce ";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						?>
										
							<option value="<?php  echo $row["ilce_id"]?>"><?php  echo $row["ilce_adi"]?></option>
									
										  
							 <?php
										  	}
							} else {
								echo "0 results";
							}
							$conn->close();
						?>						
					</select>
					  
					</td>
		          </tr>
			      <tr>
			        <td height="38">Şube seçiniz.</td>
			        <td>:</td>
			        <td>
					<select name="sube" required="required" title="ilce seçin." class="acilir_menu">
                    <option selected="" value="none">Seçiniz...</option>	
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

							$sql = "SELECT * FROM sube ";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						?>
										
							<option value="<?php  echo $row["sube_id"]?>"><?php  echo $row["sube_adi"]?></option>
									
										  
							 <?php
										  	}
							} else {
								echo "0 results";
							}
							$conn->close();
						?>						
					</select>
					  
					</td>
		          </tr>
			      <tr>
			        <td height="41">Tarih</td>
			        <td>:</td>
			        <td><input type="date" name="date" id="date" class="date"></td>
		          </tr>
			      <tr>
			        <td height="46">Saat</td>
			        <td>:</td>
			        <td><input type="time" name="time" id="time" class="date"></td>
		          </tr>
				   <tr>
			        <td height="81"></td>
			        <td></td>
			        <td><input type="submit" name="submit2" id="submit2" value="Randevu Al" class="btn"></td>
		          </tr>		
		      </tbody>
		    </table>
          </form>
		  
		  
		   </form>
				  <form id="form3" name="form3" method="post" action="bagisci_sorgulama_onay2.php">
					  <table width="561" border="0">
							<tbody>
								<tr>
									<td height="50" align="right" valign="middle"><input type="submit" name="submit3" id="submit3" value="İleri" class="btn"> </td>
							   </tr>
							</tbody>
					  </table>
				   </form>
		  
		  
		  
			
			<br><br><hr color="#c10100" size="2"><br><br>
			
		  <form id="form4" name="form4" method="post">
			  <label><center><b><font color="#c10100">ŞUBE ADRESLERİ</font></b></center></label><br>
			  <table width="700" border="0">
					  <tbody>
						<tr>
						  <td height="30"><b><font color="#c10100">Alsancak KAB</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i>Kültür Mah. Şehit Nevres Blv No:1 / Konak</td>
						</tr>
						<tr>
						  <td height="30"><b><font color="#c10100">Bergama Cumhuriyet Meydanı</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i>Ertuğrul Mah. Bergama Cumhuriyet Meydanı / Bergama</td>
						</tr>
						<tr>
						  <td height="30"><b><font color="#c10100">Buca Kız Öğrenci Yurdu</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Kuruçeşme Mah. 203 / 40. Sok. Buca</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Buca Tuğvasul İlkokulu</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i>Hürriyet Mah. 492 Sok. No:2 Şirinyer / Buca</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Çiğli Çelik AVM Önü</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> İstasyonaltı Mah. 1-15,8001/3 Sok. Çiğli</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Çiğli İzzet Gökçimen Ortaokulu</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Köyiçi Mah. 8064 Sok. No:22 Çiğli</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Gaziemir KAB</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Atıfbey Mah. Abdülhamit Yavuz Cad. No:3/A Gaziemir</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">İZSU Ödemiş</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Akıncılar Mah. 12, Mithatpaşa Cad. Akıncılar, Ödemiş</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Konak Meydanı</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Konak Meydanı Valilik Yanı 6, Anafartalar Cad. Konak</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Torbalı Meydan</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Torbalı Mah. Hüseyin Kurtuldu Sok. Kapalı Pazar Yeri Torbalı</td>
						</tr>
						  <tr>
						  <td height="30"><b><font color="#c10100">Üçkuyular KAB</font></b></td>
						</tr>
						<tr>
						  <td height="27"><i><b>Adres : </b></i> Üçkuyular Fahrettin Altay Meydanı Üçkuyular Pazaryeri Önü Karabağlar</td>
						</tr>
						
			    	</tbody>
				</table>
				<?php
					
include("baglan.php");
if($_POST)
{
@$il_id=$_POST["il"];
@$ilce_id=$_POST["ilce"];
@$sube_id=$_POST["sube"];	
@$tarih=$_POST["date"];
@$saat=$_POST["time"];





$sql="insert into randevu(il_id, ilce_id, sube_id, tarih, saat) values('".$il_id."','".$ilce_id."','".$sube_id."','".$tarih."','".$saat."')";

if ($conn->query($sql) === TRUE) {
    echo "";
} 
}
?>	

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