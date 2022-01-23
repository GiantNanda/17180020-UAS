<?php
include_once("connection.php");

$id = $_GET['nama'];
$data=mysqli_query($connect,"SELECT * FROM tbl_siswa where nama='$id'");
while ($datasiswa=mysqli_fetch_aray($data)) {
  $nama=$datasiswa['nama'];
  $jenis_kelamin=$datasiswa['jenis_kelamin'];
  $hobby=$datasiswa['hobby'];
  $alamat=$datasiswa['alamat'];
}
?>
<from action="update.php" method="post">
<div>
<div>
<div style="background-color:;width:100px;float:left"> nama : </div>
<div style="background-color:"> <input type="text" name="nama" </div> </div>
<br>
<div>
<div style="background-color:;width:100px;float:left"> jenis_kelamin : </div>
<div style="background-color:"> <input type="text" name="jenis_kelamin"> </div> </div>
<br>
<div>
<div style="background-color:;width:100px;float:left"> hobby : </div>
<div style="background-color:"> <input type="text" name="hobby"> </div> </div>
<br>
<div>
<div style="background-color:;width:100px;float:left"> alamat : </div>
<div style="background-color:"> <input type="text" name="alamat"> </div> </div>
<input type="submit" name="update" value="update">
</form>
