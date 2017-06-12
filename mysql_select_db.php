<html>
<body>
<?php
include_once("mysql_connect.php");
$tabel=mysql_query("CREATE TABLE IF NOT EXISTS tamu (
id  INT NOT NULL,
nama VARCHAR(30) NOT NULL ,
alamat VARCHAR(50) NOT NULL ,
email VARCHAR(30) NOT NULL,
komentar VARCHAR(255) NOT NULL,
PRIMARY KEY(id))");

echo "<br><br>";
if($tabel)
{echo"berhasil membuat tabel tamu melalui script php";}
else
{echo"Gagal membuat tabel";}
?>
</body>
</html>