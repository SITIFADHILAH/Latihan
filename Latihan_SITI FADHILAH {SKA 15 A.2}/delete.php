<html>
<body>
<?php
include_once("mysql_connect.php");
$id=2;
$delete=mysql_query("delete from barang where kode= '$kode");
if($delete)
{echo"berhasil menghapus data barang dengan kode $kode";}
else
{echo"gagal menghapus data";}
?>
</body>
</html>