<?php
$nama=$_GET['nama'];

include_once("connection.php");
$result=mysqli_query($connect,"DELETE FROM tbl_siswa where nama='$nama'");
if ($result){echo "<script>alert('Delete Data sucessfully');window.location.herf='index.php';</script>"}
  ?>
