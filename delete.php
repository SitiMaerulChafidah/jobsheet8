<html>
<body>
<?php
include_once("mysql_connect.php");
$id=2;
$delete=mysql_query("delete from tamu where id='$id'");

echo "<br><br>";
if($delete)
{echo"berhasil menghapus data tamu dengan id $id";}
?>
</body>
</html>