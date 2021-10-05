<?php 

session_start();

require '../../functions.php';

if ( !isset($_SESSION["login"])) {
	header("Location: ../../login.php");
	exit;
}

if ( !isset($_SESSION["adm"])) {
	header("Location: ../personal/jdadmin.php");
	exit;
}


$nama = $_SESSION['username'];
$psad = $_SESSION['psad'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Mode</title>
	<link rel="stylesheet" type="text/css" href="adminS.css">
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
				<td class="keranjang"><a href="../personal/pesananuser.php"><button><img src="../../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="../personal/userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>

	<div class="profil">
		<div class="ops">
			<h1><?php echo $nama ?></h1>
			<ul>
				<li><a href="../personal/alamat.php">Data diri saya</a></li>
				<li><a href="">Pesanan saya</a></li>
				<li><a href="../personal/jdadmin.php"><span class="mod">Masuk menjadi admin</span></a></li>
				<li><a href="../../logout.php">Keluar</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Apa yang ingin anda lakukan?</h2><span class="BHalamat">Di sini kamu bisa mengubah, menambah, dan juga menghapus barang yang dijual di Nitrotech</span></div>
			<div class="alamat">
				<table>
					<tr>
						<td class="dt1">Username</td>
						<td class="dt2u"><div class="us"><?php echo $nama; ?></div></td>
					</tr>
				<form action="ubah/ubah.php" method="post">
					<input type="hidden" name="nama" value="<?= $nama; ?>">
					<input type="hidden" name="psad" value="<?= $psad; ?>">
					<tr>
						<td class="dt1">Ubah Barang</td>
						<td class="dt2bt"><button type="submit" name="masuk">Ubah</button></td>
					</tr>
				</form>
				<form action="tambah/tambah.php" method="post">
					<input type="hidden" name="nama" value="<?= $nama; ?>">
					<input type="hidden" name="psad" value="<?= $psad; ?>">
					<tr>
						<td class="dt1">Tambah Barang</td>
						<td class="dt2bt"><button type="submit" name="masuk">Tambah</button></td>
					</tr>
				</form>
				<form action="hapus/hapus.php" method="post">
					<input type="hidden" name="nama" value="<?= $nama; ?>">
					<input type="hidden" name="psad" value="<?= $psad; ?>">
					<tr>
						<td class="dt1">Hapus Barang</td>
						<td class="dt2bt"><button type="submit" name="masuk">Hapus</button></td>
					</tr>
				</form>
				<form action="lihat/lihat.php" method="post">
					<input type="hidden" name="nama" value="<?= $nama; ?>">
					<input type="hidden" name="psad" value="<?= $psad; ?>">
					<tr>
						<td class="dt1">Lihat Penjualan</td>
						<td class="dt2bt"><button type="submit" name="masuk">Lihat</button></td>
					</tr>
				</form>
				</table>
				<div class="dt2k"><a href="adminK.php">Keluar dari mode admin</a></div>
			</div>
			<div class="attdt"><center><h3>Perhatian</h3></center><p>Ketika anda menekan satu di antara tiga pilihan di samping, anda akan di bawa ke tempat data-data barang yang dijual, gunakanlah secara bijak agar tidak terjadi hal yang tidak di inginkan</p></div>
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