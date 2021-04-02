<!doctype html>
<html>
<head>
<title>Kızılay Randevu Sistemi</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>


	<div class="kutu">
		<form action="login.php" method="POST">
		<p class="baslik">Yönetici Girişi</p>
		<hr><br>
			<table  align="center">

				<tr>
					<td><b>Kullanıcı Adı</b></td>
					<td><b>:</b></td>
					<td width="107" height="40"> <input type="text" name="username"></td>
				</tr>
				<tr>
					<td><b>Şifre</b></td>
					<td><b>:</b></td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="107" height="40"><input type="submit" value="Giriş" class="btn"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<div class="kutu">
		<form action="doktor_login.php" method="POST">
		<p class="baslik">Doktor Girişi</p>
		<hr><br>
			<table align="center">
				<tr>
					<td><b>Kullanıcı Adı</b></td>
					<td><b>:</b></td>
					<td width="107" height="40"> <input type="text" name="username"></td>
				</tr>
				<tr>
					<td><b>Şifre</b></td>
					<td><b>:</b></td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="107" height="40"><input type="submit" value="Giriş" class="btn"></td>
				</tr>
			</table>
		</form>
	</div>	

</body>
</html>