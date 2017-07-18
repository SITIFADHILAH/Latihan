<html>
<body>
<?php
include_once("mysql_connect.php");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 00001',' Matematika 2',' Non Fiksi','12','25000','info@stekom.ac.id','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 00002',' English 1',' Non Fiksi','08','30000','info@ngilmu.ac.id','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 00003',' Ketika Cintah Bertasbih',' Fiksi',' 30',' 50000','info@ngilmu.ac.id','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 00004',' Warkop DKI',' Fiksi','15','32000','info@ngilmu.ac.id','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 00005',' Ayat-ayat Cinta',' Fiksi','25','25000','info@ngilmu.ac.id','test.. ')");
if($insert)
{echo"barhasil menyisipkan data pada tabel barang";}
else
{echo"gagal pengisipan data";}
?>
</body>
</html>