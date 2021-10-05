<?php 

session_start();

require '../../../functions.php';

$nama = $_SESSION['username'];
$psad = $_SESSION['psad'];

if ( !isset($_SESSION["login"])) {
	header("Location: ../../../login.php");
	exit;
}

if ( !isset($_SESSION["psad"])) {
	header("Location: ../../personal/jdadmin.php");
	exit;
}

$pgh = 0;
$pgh1 = mysqli_query($konek, "SELECT * FROM tb_pesananuser WHERE status = 'sudah dibayar'");

while ($tb = mysqli_fetch_array($pgh1)) {
	$dt = $tb['harga_barang'];
	{
		$pgh = $pgh + $dt;
	}}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lihat Penghasilan</title>
	<link rel="stylesheet" type="text/css" href="lihatP.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@1,200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="header">
		<table>
			<tr>
				<td class="logo"><a href="../../../index.php"><img src="../../../img/home/header/Logo.png"></a></td>
				<form action="../../../search box/pencarian.php" method="post">
				<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
				<td class="pencar"><button type="submit" name="lihat"><img src="../../../img/home/header/MG.png"></button></td>
				</form>
				<td class="keranjang"><a href="../../personal/pesananuser.php"><button><img src="../../../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../../../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="../../personal/userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>

	<div class="profil">
		<div class="ops">
			<h1><?php echo $nama ?></h1>
			<ul>
				<li><a href="../adminS.php">Kembali ke menu</a></li>
				<li><a href="../ubah/ubah.php?id=<?php echo $id ;?>">Pindah ke ubah data</a></li>
				<li><a href="../tambah/tambah.php">Pindah ke tambah data</a></li>
				<li><a href="../hapus/hapus.php">Pindah ke hapus data</a></li>
				<li><a href="lihat.php">Pindah ke penjualan</a></li>
				<li><a href="lihatP.php"><span class="mod">Pindah ke penghasilan</span></a></li>
				<li><a href="lihat.php">Kembali</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Lihat penghasilan</h2><span class="BHalamat">Lihat total pendapatan dari hasil penjualan di Nitrotech<span></div>
			<div class="alamat">
				<h1><span class="rp">Rp</span> <span class="duit"><?php echo $pgh; ?></span></h1>
			</div>
			</div>
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
						<td class="lyn"><div class="pembayaran"><img src="../../../img/home/tujuh/payment/bri.png"><img src="../../../img/home/tujuh/payment/dana.png"></div></td>
						<td class="lyn"><div class="kurir"><img src="../../../img/home/tujuh/shipping/jnt.png"></div></td>
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
						<td><a href="https://www.facebook.com/aldilan.180705/"><img src="../../../img/home/tujuh/sosmed/fb.png"></a></td>
						<td><a href="https://www.instagram.com/ntroxygen/"><img src="../../../img/home/tujuh/sosmed/ig.png"></a></td>
						<td><a href="https://wa.me/0895330019905"><img src="../../../img/home/tujuh/sosmed/wa.png"></a></td>
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