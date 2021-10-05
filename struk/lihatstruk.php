<?php 

session_start();

require '../functions.php';

if ( !isset($_SESSION["login"])) {
	header("Location: ../../login.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: ../admin/adminS.php");
	exit;
}

$nama = $_SESSION["username"];

$id = $_GET['id'];

$bu = query2("SELECT * FROM `tb_datadiri` WHERE `username` = '$nama'")[0];
$bp = query2("SELECT * FROM `tb_pesananuser` WHERE `id_barang` = '$id'")[0];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lihat Struk</title>
	<link rel="stylesheet" type="text/css" href="lihatstruk.css">
</head>
<body>
<div class="container">
	<div class="header">
		<table>
			<tr>
				<td class="logo"><a href="../index.php"><img src="../img/home/header/Logo.png"></a></td>
				<form action="pencarian.php" method="post">
				<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
				<td class="pencar"><button type="submit" name="lihat"><img src="../img/home/header/MG.png"></button></td>
				</form>
				<td class="keranjang"><a href="keranjang.html"><button><img src="../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>
	<div class="profil">
		<center><div class="ctn">
			<div class="headkat">
				<table>
					<tr>
						<td><img src="../img/home/header/Logo.png"></td>
					</tr>
					<tr>
						<td colspan="2"><span class="att">Struk Pembayaran Tagihan Produk <br> Terima Kasih Telah Berbelanja Di NITROTECH <br> Mohon Simpan Struk Ini Untuk Melakukan Pembayaran Di Toko</span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><span class="kri">Nama Produk</span></td>
						<td><span class="knn"><?php echo $bp['nama_barang']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Jenis Produk</span></td>
						<td><span class="knn"><?php echo $bp['kategori_barang']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Username</span></td>
						<td><span class="knn"><?php echo $bu['username']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Nama Pembeli</span></td>
						<td><span class="knn"><?php echo $bu['nama_lengkap']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">No Telepon</span></td>
						<td><span class="knn"><?php echo $bu['no_telepon']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Jenis Kelamin</span></td>
						<td><span class="knn"><?php echo $bu['jenis_kelamin']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Tanggal Lahir</span></td>
						<td><span class="knn"><?php echo $bu['tanggal_lahir']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Harga Produk</span></td>
						<td><span class="knn">Rp. <?php echo $bp['harga_barang']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Biaya Admin</span></td>
						<td><span class="knn">Rp. 0</span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><h3>Bill</h3></td>
					</tr>
					<tr>
						<td><span class="kri">Harga Produk</span></td>
						<td><span class="knn">Rp. <?php echo $bp['harga_barang']; ?></span></td>
					</tr>
					<tr>
						<td><span class="kri">Biaya Admin</span></td>
						<td><span class="knn">Rp. 0</span></td>
					</tr>
					<tr>
						<td><span class="kri">Denda</span></td>
						<td><span class="knn">Rp. 0</span></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><span class="kriT">Total</span></td>
						<td><span class="knn">Rp. <?php echo $bp['harga_barang']; ?></span></td>
					</tr>
					<tr>
						<td class="blk"><a href="../user/personal/pesananuser.php">Kembali</a></td>
					</tr>
				</table>
			</div>
		</div></center>
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
						<td class="lyn"><div class="pembayaran"><img src="../img/home/tujuh/payment/bri.png"><img src="../img/home/tujuh/payment/dana.png"></div></td>
						<td class="lyn"><div class="kurir"><img src="../img/home/tujuh/shipping/jnt.png"></div></td>
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
						<td><a href="https://www.facebook.com/aldilan.180705/"><img src="../img/home/tujuh/sosmed/fb.png"></a></td>
						<td><a href="https://www.instagram.com/ntroxygen/"><img src="../img/home/tujuh/sosmed/ig.png"></a></td>
						<td><a href="https://wa.me/0895330019905"><img src="../img/home/tujuh/sosmed/wa.png"></a></td>
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