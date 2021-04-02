
<?php

$host="localhost";
$db="kizilay";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass,$db);

mysqli_set_charset($conn, "utf8");
if (mysqli_connect_errno())
  {
  echo "Bağlantı Başarısız: " . mysqli_connect_error();
  }
?>

