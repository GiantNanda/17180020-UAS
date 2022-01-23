<?php
$nama=$datasiswa['nama'];
$jenis_kelamin=$datasiswa['jenis_kelamin'];
$hobby=$datasiswa['hobby'];
$alamat=$datasiswa['alamat'];

include_once("connection.php");
$result=mysqli_query($connect,"INSERT INTO tbl_siswa(nama,jenis_kelamin,hobby,alamat) VALUES ('$nama','$jenis_kelamin','$hobby','$alamat')";
if ($result) {echo "<script>alert('data sucessfully');window.location.herf='index.php';</script>";}
  ?>
