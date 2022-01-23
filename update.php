<?php
$nama=$_POST ['nama'];
$jenis_kelamin=$_POST ['jenis_kelamin'];
$hobby=$_POST ['hobby'];
$alamat=$_POST ['alamat'];

include_once("connection.php");
$result=mysqli_query($connect,"UPDATE tbl_siswa SET nama='$nama', jenis_kelamin='$jenis_kelamin',hobby='$hobby',alamat='$alamat'");
if ($result){echo "<script>alert('Update was sucessfully');window.
  location.herf='index.php';</script>"}
  ?>
