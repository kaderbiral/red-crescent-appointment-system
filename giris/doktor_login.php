<?php
header('Content-Type: text/html; charset=utf-8');
include("doktor_ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:doktor.php");
}else{
echo "<center>Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>