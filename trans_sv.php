<?php

include "connect.php" ;

$nama = $_POST['pemesan'];
$barang = $_POST['barang'];
$tanggal= $_POST['tanggal'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$dp = $_POST['dp'];

mysql_query("INSERT INTO transaksi VALUE(NULL,'$pemesan', '$barang', '$tanggal', '$alamat', '$telp', '$email', '$dp')");
header("location:data.php");



?>