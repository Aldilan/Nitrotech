<?php 

session_start();

require '../../functions.php';

if ( !isset($_SESSION["login"])) {
	header("Location: ../../login.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: ../admin/adminS.php");
	exit;
}

$nama = $_SESSION["username"];

$jdph = 2;
$jd = count(query("SELECT * FROM tb_pesananuser"));
$jh = ceil($jd / $jdph);
$ha = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$ad = ($jdph * $ha) - $jdph;

$barang = query("SELECT * FROM tb_pesananuser LIMIT $ad, $jdph");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Keranjang</title>
	<link rel="stylesheet" type="text/css" href="pesananuser.css">
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
				<li><a href=""><span class="mod">Pesanan saya</a></li>
				<li><a href="jdadmin.php">Masuk menjadi admin</a></li>
				<li><a href="../../logout.php">Keluar</a></li>
			</ul>
		</div>
		<div class="ctn">
			<?php foreach ($barang as $row) : ?>
				<div class="headkat">
					<table>
						<tr>
							<td rowspan="3"><img src="../../img/barang/<?php echo $row['gambar_barang']; ?>"></td>
							<td><h1><?php echo $row['nama_barang']; ?></h1></td>
						</tr>
						<tr>
							<td><span class="kagor"><?php echo $row['kategori_barang']; ?></span></td>
						</tr>
						<tr>
							<td>Rp <span class="rp"><?php echo $row['harga_barang']; ?></span></td>
							<td>
								<?php $status = $row['status']; ?>
								<?php $id = $row['id_barang']; ?>
								<?php if ($status == 'belum dibayar') {
									echo "Belum buat struk? <span class='st'><a href='../../struk/buatstruk.php?id=$id'>Bikin struk di sini</a></span>";
								}else {
									echo "Sudah buat struk? <span class='st'><a href='../../struk/lihatstruk.php?id=$id'>Lihat struk di sini</a></span>";								
								}
								 ?>
							</td>
						</tr>
					</table>
				</div>
			<?php endforeach; ?>
			<center><div class="hal">
						<?php if ($ha >1 ) : ?>
							<a href="?nama=<?= $nama; ?>&halaman=<?= $ha - 1 ?>">&laquo;</a>
						<?php endif; ?>

						<?php for ( $i = 1; $i <= $jh; $i++) : ?>
							<?php if ($i == $ha) : ?>
								<a href="?nama=<?= $nama; ?>&halaman=<?= $i; ?>" style="font-weight: bold; color : #01258B;"><?= $i; ?></a>
							<?php else : ?>
								<a href="?nama=<?= $nama; ?>&halaman=<?= $i; ?>"><?= $i; ?></a>
							<?php endif; ?>
						<?php endfor; ?>
						<?php if ($ha < $jh ) : ?>
							<a href="?nama=<?= $nama; ?>&halaman=<?= $ha + 1 ?>">&raquo;</a>
						<?php endif; ?>
			</div></center>	
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