<?php 

session_start();

require 'functions.php';

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: user/admin/adminS.php");
	exit;
}

$nama = $_SESSION["username"];

$katgor1 = 'Mouse';
$katgor2 = 'Keyboard';
$katgor3 = 'Cooling Fan';
$katgor4 = 'Power Supply';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
		<div class="header">
			<table>
				<tr>
					<td class="logo"><a href=""><img src="img/home/header/Logo.png"></a></td>
					<form action="search box/pencarian.php" method="post">
					<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
					<td class="pencar"><button type="submit" name="lihat"><img src="img/home/header/MG.png"></button></td>
					</form>
					<td class="keranjang"><a href="user/personal/pesananuser.php"><button><img src="img/home/header/keranjang.png"></button></a></td>
					<td class="katgor"><center><a href="kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
					<td class="user"><a href="user/personal/userA.php"><h1><?php echo $nama; ?></h1></a></td>
				</tr>
			</table>
		</div>

	<center><div class="kategori">
		<ul>
			<li><div class="kategorisatu"><a href="kategori/barangkatgor.php?id=<?php echo $katgor1;?>">Mouse</a></div></li>
			<li><div class="kategoridua"><a href="kategori/barangkatgor.php?id=<?php echo $katgor2;?>">Keyboard</a></div></li>
			<li><div class="kategoritiga"><a href="kategori/barangkatgor.php?id=<?php echo $katgor3;?>">Cooling fan</a></div></li>
			<li><div class="kategoriempat"><a href="kategori/barangkatgor.php?id=<?php echo $katgor4;?>">Power supply</a></div></li>
		</ul>
	</div></center>

	<center><div class="tiga">
		<figure>
			<div class="tiga">
				<img src="img/home/iklan/iklan1.jpg" class="foto">
			</div>
			<div class="tiga">
				<img src="img/home/iklan/iklan2.png" class="foto">
			</div>
			<div class="tiga">
				<img src="img/home/iklan/iklan3.jpg" class="foto">
			</div>
			<div class="tiga">
				<img src="img/home/iklan/iklan4.png" class="foto">
			</div>
		</figure>	
	</div></center>

	<center><div class="empat">
		<div class="tabelb4">
			<table>
				<tr>
					<td class="kri" >
						<table>
							<tr>
								<td class="plh" colspan="4"><center><h3>Gaming chair pilihan</center></h3></td>
							</tr>
							<tr>
								<td><a href="barang/barang.php?id=49"><img src="img/home/iklan/Rexus R50 LE.jpg"></td>
								<td><a href="barang/barang.php?id=50"><img src="img/home/iklan/Sage SG-168.jpg"></td>
								<td><a href="barang/barang.php?id=51"><img src="img/home/iklan/Armageddon Nebuka III.jpg"></td>
								<td><a href="barang/barang.php?id=52"><img src="img/home/iklan/SL Omega 2020 LOL.jpg"></td>
							</tr>
						</table>
					</td>
					<td class="knn">
						<table>
							<tr>
								<td class="plh" colspan="4"><center><h3>Rekomendasi headset gaming</center></h3></td>
							</tr>
							<tr>
								<td><a href="barang/barang.php?id=53"><img src="img/home/iklan/Rexus HX20.jpg"></td>
								<td><a href="barang/barang.php?id=54"><img src="img/home/iklan/Logitech G431.jpg"></td>
								<td><a href="barang/barang.php?id=55"><img src="img/home/iklan/Sades R12 Pro.jpg"></td>
								<td><a href="barang/barang.php?id=56"><img src="img/home/iklan/Rexus IRIS HG19.jpg"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div></center>

	<center><div class="lima">
		<div>
			<table>
				<tr>
					<td colspan="4"><center><h2>Produk terbaru</h2></center></td>
				</tr>
				<tr>
					<td><a href="barang/barang.php?id=57"><img src="img/home/iklan/DA N21.jpg"></a></td>
					<td><a href="barang/barang.php?id=58"><img src="img/home/iklan/SL X TS.jpg"></a></td>
					<td><a href="barang/barang.php?id=59"><img src="img/home/iklan/Logitech G913.jpg"></a></td>
					<td><a href="barang/barang.php?id=60"><img src="img/home/iklan/ROG PG259QN.jpg"></a></td>
				</tr>
				<tr>
					<td class="lht" colspan="4"><center><a href="kategori/Okategori.php">Lihat barang lainnya</a></center></td>
				</tr>
			</table>
		</div>
	</div></center>

	<center><div class="enam">
		<div>
			<table>
				<tr>
					<td colspan="4"><center><h2>Hot deals 2021</h2></center></td>
				</tr>
				<tr>
					<td><a href="barang/barang.php?id=61"><img src="img/home/iklan/Armageddon 850 VP.jpg"></a></td>
					<td><a href="barang/barang.php?id=62"><img src="img/home/iklan/Fantech GS202.jpg"></a></td>
					<td><a href="barang/barang.php?id=63"><img src="img/home/iklan/Fantech WGP12.jpg"></a></td>
					<td><a href="barang/barang.php?id=64"><img src="img/home/iklan/Armageddon HNS.jpg"></a></td>
				</tr>
				<tr>
					<td class="lht" colspan="4"><center><a href="kategori/Okategori.php">Lihat barang lainnya</a></center></td>
				</tr>
			</table>
	</div></center>

<div class="tujuh">
		
		<center><div class="layanan">
				<table>
					<tr>
						<td class="lyn"><center><h3>PAYMENT</h3></center></td>
						<td class="lyn"><center><h3>SHIPPING</h3></center></td>
						<td class="lyn"><center><h3>SERVICE</h3></center></td>
					</tr>
					<tr>
						<td class="lyn"><div class="pembayaran"><img src="img/home/tujuh/payment/bri.png"><img src="img/home/tujuh/payment/dana.png"></div></td>
						<td class="lyn"><div class="kurir"><img src="img/home/tujuh/shipping/jnt.png"></div></td>
						<td class="lyn"><p>aldilan@smkwikrama.sch.id</p>
							Cigombong Bata Alam Lido,<br>
							Bogor - Jawa Barat,<br>
							Indonesia,<br>
							16110,<br>
							 +62 895 3300-19905
						</td>
					</tr>
				</table>
		</div></center>
		<center><div class="plus">
				<table>
					<tr>
						<td><a href="https://www.facebook.com/aldilan.180705/"><img src="img/home/tujuh/sosmed/fb.png"></a></td>
						<td><a href="https://www.instagram.com/ntroxygen/"><img src="img/home/tujuh/sosmed/ig.png"></a></td>
						<td><a href="https://wa.me/0895330019905"><img src="img/home/tujuh/sosmed/wa.png"></a></td>
					</tr>
				</table>
		</div></center>
		<div class="footer">
			<center><p>Copyright by Nitrotech 2021</p></center>
		</div>
	</div>
</div>
</body>
</html>