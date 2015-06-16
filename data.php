<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Bledug Joglo</title>
<body>
<div class="header">
	<div class="logo">
	<img src="img/logo1.jpg"  alt="image">
	</div>
	<div class="kop">
		Bledug Joglo
		</div>
		
</div>
<div class="navbar">
		<a href="index.php" onclick="alert('Anda Ingin Kembali Beralih Ke Halaman Home')">HOME<br>
		<a href="produk.php">PRODUK<br>
		<a href="contact.php">CONTACT US<br></a>
		<a href="profil.php">PROFIL<br>
	</div>
	
		<div class="content">
		

<?php
include "connect.php";

$baca = mysql_query("SELECT * FROM transaksi");
$tampung=mysql_fetch_array($baca);
?>
<?php do { ?>

<table width="900" height="15" border="1">
  <tr>
    <td width="25">nama</td>
    <td width="120">barang</td>
    <td width="100">tanggal</td>
	<td width="90">alamat</td>
	<td width="90">telp</td>
	<td width="90">email</td>
	<td width="90">dp</td>
  </tr>

  <tr> 
	 <td><?php echo $tampung['pemesan'];?></td>
    <td><?php echo $tampung['barang'];?></td>
    <td><?php echo $tampung['tanggal'];?></td>
	 <td><?php echo $tampung['alamat'];?></td>
	  <td><?php echo $tampung['telp'];?></td>
	   <td><?php echo $tampung['email'];?></td>
	    <td><?php echo $tampung['dp'];?></td>
	
  </tr>
  <?php } while ($tampung=mysql_fetch_array($baca)); ?>
  	
</table>

</div>
</body>
</html>