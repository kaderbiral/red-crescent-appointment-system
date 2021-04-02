<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="doktor.css" />
</head>
<body>
<ul>
  
</ul>
 
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 
 
 <h3 class="baslik">KAN BAGISCISI KAYIT FORMU</h3><br>
 
<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'kizilay') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from sorular");
echo '<table class="tablo" border="1" cellpadding="18" cellspacing="3">
	<tr>
		<td width="500" bgcolor="#E7E7E7"><b>SORU ID</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>"Kan Bağışçısı Bilgilendirilmiş Onam Formu"nu okuyup anladınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kendinizi sağlıklı ve iyi hissediyor musunuz?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Tehlikeli bir işte mi çalışıyorsunuz?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Daha önce yaptığınız bir kan bağışı müracaatı herhangi bir nedenle geri çevrildi mi?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Prostat büyümesi, sivilce, sedef hastalığı veya kellik için herhangi bir ilaç kulanıyor musunuz?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Herhangi bir enfeksiyon hastalığı için ilaç (antibiyotik, ateş düşürücü gibi) aldınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 5 gün içinde aspirin, herahangi bir ağrı kesici veya romatizma ilacı aldınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Alerjik reaksiyon geçirdiniz mi, buna yönelik tedavi aldınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Yukarıda belirtilenler dışında başka bir ilaç kullanıyor musunuz?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 1 hafta içinde ishal (diare) oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 1 ay içinde herhangi bir aşı oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde diş tedavisi oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kronik (müzmin) bir hastalığınız var mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Para veya uyuşturucu karşılığında cinsel ilişkiniz oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Frengi (sifiliz) veya bel soğukluğu (gonore) nedeni ile tedavi oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>AIDS hastalığınız var mı, kendinizde böyle bir hastalık olduğuna dair bir şüpheniz var mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>AIDS hastası olduğunu bildiğiniz biri ile cinsel ilişkiniz oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kan ve kan ürünü alan, veya hemofili hastası biri ile cinsel ilişkiniz oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Hiç uyuşturucu kullandınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>İnsülin, büyüme hormonu, immünglobulin, tamoksifen kullandınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde ameliyat veya endoskopik muayene oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kalp-damar, akciğer, mide-barsak, böbrek hastalığınız var mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Bugüne kadar hiç nöbet, sara (epilepsi) krizi veya felç geçirdiniz mi?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Bugüne kadar hiç kanser tanısı aldınız mı, kander tedavisi gördünüz mü?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Şeker hastalığınız ya da yaygın romatizmal bir hastalığınız var mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kanamalı bir hastalık veya kan hastalığınız var mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Sıtma, verem, malta humması, kemik iltihabı veya kara humma geçirdiniz mi?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Hepatit (sarılık) geçirdiniz mi, taşıyıcı mısınız?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Hepatit (sarılık) olan biriyle aynı evde yaşıyor musunuz veya cinsel ilişkiniz oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Toksoplazma geçirdiniz mi?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Kamerun, Orta Afrika, Çad, Kongo, Ekvatoryal Gine, Gabon, Nijer ya da Nijerya da hiç bulundunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>1980-1996 arasında İngiltere, Kuzey İrlanda, Galler ya da İskoçya da bulundunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 3 yıl içinde yukarıdaki ülkeler dışında başka ülkelerde bulundunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Ailenizde deli dana hastalığı (Creutzfeld - Jacob Hastalığı) olan birisi oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Size dura mater (beyin zarı) veya kornea nakli yapıldı mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde size kan, doku veya organ nakli yapıldı mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde bir başkasının kanı ile temasınız oldu mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde akupunktur, botoks, takı için cilt deldirme, saç ekimi veya estetik müdahaleler yaptırdınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde dövme, hacamat yaptırdınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde hayvan ısırığı nedeni ile kuduz aşısı oldunuz mu?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ay içinde üç günden fazla tutuklu kaldınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 3 ay içinde kan bağışı yaptınız mı?</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>Son 12 ayda hamilelik geçirdiniz mi veya düşük yaptınız m??</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>TARİH<b></td>
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["soru_id"].'</td>
		<td>'.$cek["soru1"].'</td>
		<td>'.$cek["soru2"].'</td>
		<td>'.$cek["soru3"].'</td>
		<td>'.$cek["soru4"].'</td>
		<td>'.$cek["soru5"].'</td>
		<td>'.$cek["soru6"].'</td>
		<td>'.$cek["soru7"].'</td>
		<td>'.$cek["soru8"].'</td>
		<td>'.$cek["soru9"].'</td>
		<td>'.$cek["soru10"].'</td>
		<td>'.$cek["soru11"].'</td>
		<td>'.$cek["soru12"].'</td>
		<td>'.$cek["soru13"].'</td>
		<td>'.$cek["soru14"].'</td>
		<td>'.$cek["soru15"].'</td>
		<td>'.$cek["soru16"].'</td>
		<td>'.$cek["soru17"].'</td>
		<td>'.$cek["soru18"].'</td>
		<td>'.$cek["soru19"].'</td>
		<td>'.$cek["soru20"].'</td>
		<td>'.$cek["soru21"].'</td>
		<td>'.$cek["soru22"].'</td>
		<td>'.$cek["soru23"].'</td>
		<td>'.$cek["soru24"].'</td>
		<td>'.$cek["soru25"].'</td>
		<td>'.$cek["soru26"].'</td>
		<td>'.$cek["soru27"].'</td>
		<td>'.$cek["soru28"].'</td>
		<td>'.$cek["soru29"].'</td>
		<td>'.$cek["soru30"].'</td>
		<td>'.$cek["soru31"].'</td>
		<td>'.$cek["soru32"].'</td>
		<td>'.$cek["soru33"].'</td>
		<td>'.$cek["soru34"].'</td>
		<td>'.$cek["soru35"].'</td>
		<td>'.$cek["soru36"].'</td>
		<td>'.$cek["soru37"].'</td>
		<td>'.$cek["soru28"].'</td>
		<td>'.$cek["soru39"].'</td>
		<td>'.$cek["soru40"].'</td>
		<td>'.$cek["soru41"].'</td>
		<td>'.$cek["soru42"].'</td>
		<td>'.$cek["soru43"].'</td>
		<td>'.$cek["tarih"].'</td>
	</tr>';}
echo '</table>';


?>

<br><br>
 <h3 class="baslik">RANDEVU BILGILERI</h3><br>

<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'kizilay') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from randevu");
echo '<table class="tablo" border="1" cellpadding="3" cellspacing="3">
	<tr>
		<td width="100" bgcolor="#E7E7E7"><b>RANDEVU SIRASI</b></td>
		<td width="100" bgcolor="#E7E7E7"><b>İL</b></td>
		<td width="100" bgcolor="#E7E7E7"><b>İLÇE</b></td>
		<td width="100" bgcolor="#E7E7E7"><b>ŞUBE</b></td>
		<td width="150" bgcolor="#E7E7E7"><b>TARİH</b></td>
		<td width="150" bgcolor="#E7E7E7"><b>SAAT</b></td>

	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["randevu_id"].'</td>
		<td>'.$cek["il_id"].'</td>
		<td>'.$cek["ilce_id"].'</td>
		<td>'.$cek["sube_id"].'</td>
		<td>'.$cek["tarih"].'</td>
		<td>'.$cek["saat"].'</td>

	</tr>';}
echo '</table>';
?>

</body>
</html>