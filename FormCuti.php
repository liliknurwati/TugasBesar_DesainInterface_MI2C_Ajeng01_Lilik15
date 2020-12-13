<!DOCTYPE html>
<html>
<head>
	<title>Permintaan Cuti</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

	
	<div class="margin" action="FormCuti.html" method="post" >
		<br>
		<img class="gambar" src="../DI/images/ajeng.jpg" width="80px" style="display:block; margin:auto;">
		<hr color="silver" size="5%">
		<br>
		<br>

	<?php
		$nip=$_POST['NIP'];
		$Nama=$_POST['Nama'];
		$Tempat=$_POST['Tempat'];
		$Tgl=$_POST['Tgl'];
		$Bln=$_POST['Bln'];
		$Thn=$_POST['Thn'];
		$JK=$_POST['JK'];
		$Tgla=$_POST['Tgla'];
		$Blna=$_POST['Blna'];
		$Thna=$_POST['Thna'];
		$Tgls=$_POST['Tgls'];
		$Blns=$_POST['Blns'];
		$Thns=$_POST['Thns'];
		$alasan=$_POST['alasan'];

		echo "NIP      					: $nip<br><br>";
		echo "Nama     					: $Nama<br><br>";
		echo "Tempat dan Tanggal Lahir	: $Tempat, $Tgl/$Bln/$Thn<br><br>";
		echo "Jenis Kelamin 			: $JK<br><br>";
		echo "Tanggal Mulai Cuti 		: $Tgla/$Blna/$Thna<br><br>";
		echo "Tanggal Akhir Cuti 		: $Tgls/$Blns/$Thns<br><br>";
		echo "Alasan Cuti				: $alasan<br><br>";
	?>

	<br>
	<form action="Dua.html">
		<button type="submit" style="background-color: #BF00ff; color: white; width: 70px; border-radius: 10px; border: none;" >
	  				Back
	  			</button>
	</form>
	</div>
</body>
</html>