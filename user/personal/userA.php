<?php 

session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: ../../login.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: ../admin/adminS.php");
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
	<title>Pilih Opsi</title>
	<link rel="stylesheet" type="text/css" href="userA.css">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="header">
		<table>
			<tr>
				<td class="logo"><a href="../../index.php"><img src="../../img/home/header/Logo.png"></a></td>
				<form action="../../search box/pencarian.php" method="post">
				<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
				<td class="pencar"><button type="submit" name="lihat"><img src="../../img/home/header/MG.png"></button></td>
				</form>
				<td class="keranjang"><a href="pesananuser.php"><button><img src="../../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>

	<div class="profil">
		<div class="ops">
			<h1><?php echo $nama ?></h1>
			<ul>
				<li><a href="alamat.php">Data diri saya</a></li>
				<li><a href="pesananuser.php">Pesanan saya</a></li>
				<li><a href="jdadmin.php">Masuk menjadi admin</a></li>
				<li><a href="../../logout.php">Keluar</a></li>
			</ul>
		</div>
		<div class="ctn">
			<img src="../../img/user/userA.jpg"><div class="blcwv"><h1>hallo <?php echo $nama; ?></h1></div>
		</div>
	</div>

	<div class="tujuh">
		<center><div class="layanan">
				<table>
					<tr>
						<td class="lyn"><center><h3>PAYMENT</h3></center></td>
						<td class="lyn"><center><h3>SHIPPING</h3></center></td>
						<td class="lyn"><center><h3>SERVICE</h3></center></td>
					</tr>
					<tr>
						<td class="lyn"><div class="pembayaran"><img src="../../img/home/tujuh/payment/bri.png"><img src="../../img/home/tujuh/payment/dana.png"></div></td>
						<td class="lyn"><div class="kurir"><img src="../../img/home/tujuh/shipping/jnt.png"></div></td>
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
						<td><a href="https://www.facebook.com/aldilan.180705/"><img src="../../img/home/tujuh/sosmed/fb.png"></a></td>
						<td><a href="https://www.instagram.com/ntroxygen/"><img src="../../img/home/tujuh/sosmed/ig.png"></a></td>
						<td><a href="https://wa.me/0895330019905"><img src="../../img/home/tujuh/sosmed/wa.png"></a></td>
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