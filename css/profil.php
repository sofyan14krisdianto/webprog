<?php
session_start();
if(!isset($_SESSION['login'])) {include("index.php");}
else {
?>

	<html>
		<head><title>Profil</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script type="text/javascript" src="tiny_mce/tiny_mce.js" ></script>
		<script type="text/javascript" src="tiny_mce/setting.js"></script>
		</head>
		
		<body>	
		<div class="judul">Ini Halaman Profil</div>
		
		<div class="menua"> </div>
		
		<div class="profil">
		Nama : Priska<p>
		Nim  : 148010040019
		</div>
		
		<div class="menub">
		<div class="nav">
		<ul>
	    <li><a href="#">Howdy!</a>
	    <ul>
		<li><a href="profil.php">Profil</a></li>
		<li><a href="logout.php">Log Out</a></li>
	    </ul>		
	    </li>
		</ul>
		</div>
		</div>
		
		<div class="halaman">
		<p><p>
		Judul :
		<input type="text" size="20" name="judul" value></p>
		<textarea> </textarea></p>
		</div>
		
		<div class="menuc">	</div>
		</body>
</html>

<?php
}
?>
