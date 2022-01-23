<?php

$server = "localhost";
$user = "root";
$password = "";
$connect = "tbl_siswa";

$db = mysqli_connect($server, $user, $password, $connect);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
