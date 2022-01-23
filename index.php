<!DOCTYPE html>
<html>
<head>
	<title>Giant Nanda 17180020</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>List Data Siswa</h1>
  <a href="add.php"> Tambahkan Data </a>
	<table class="table1">
			<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Hobby</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
	<?php
	include_once("connection.php");
	$data=mysqli_query($connect,"SELECT * FROM tbl_siswa");
	while($datasiswa= mysqli_fetch_aray($data))?>
	<tr>
		<td> <?php echo $datasiswa ['nama'];?> </td>
		<td> <?php echo $datasiswa ['jenis_kelamin'];?> </td>
		<td> <?php echo $datasiswa ['hobby'];?> </td>
		<td> <?php echo $datasiswa ['alamat'];?> </td>
		<td> <a href="edit.php?nama=<?php echo $datauser['nama'];?>">Edit </a> |
		<a href="delete.php?nama=<?php echo $datauser['nama'];?>">Delete  </td>
		</tr>
		<?php
	?>

	</table>
</body>
</html>
