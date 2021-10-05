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


if (isset($_POST['tambah'])) {
	if (tambah($_POST)>0) {
		echo "<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = '../adminS.php';
			</script>";
	}else{
		echo "<script>
				alert('Data gagal ditambahkan!');
				document.location.href = '../adminS.php';
			</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
<div class="container">
	<nav>
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
	</nav>

	<div class="profil">
		<div class="ops">
			<h1><?php echo $nama ?></h1>
			<ul>
				<li><a href="../adminS.php">Kembali ke menu</a></li>
				<li><a href="../ubah/ubah.php">Pindah ke ubah data</a></li>
				<li><a href="tambah.php"><span class="mod">Pindah ke tambah data</span></a></li>
				<li><a href="../hapus/hapus.php">Pindah ke hapus data</a></li>
				<li><a href="../lihat/lihat.php">Pindah ke penjualan</a></li>
				<li><a href="../lihat/lihatP.php">Pindah ke penghasilan </a></li>
				<li><a href="../adminS.php">Kembali</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Tambah Data</h2><span class="BHalamat">Data barang yang baru akan ditambahkan</span></div>
			<div class="alamat">
			<form action="" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td class="dt1">Nama barang</td>
						<td class="dt2ps"><input type="text" name="NB" placeholder="ketik nama barang di sini" required></td>
					</tr>
					<tr>
						<td class="dt1">Harga</td>
						<td class="dt2ps"><input type="number" name="HB" placeholder="ketik harga barang di sini" required></td>
					</tr>
					<tr>
						<td class="dt1">Stok</td>
						<td class="dt2ps"><input type="number" name="SB" placeholder="ketik stok barang di sini" required></td>
					</tr>
					<tr>
						<td class="dt1">Kategori</td>
						<td><div class="slc"><select id="KB" name="KB">
								<option value="Mouse">Mouse</option>
								<option value="Monitor">Monitor</option>
								<option value="Keyboard">Keyboard</option>
								<option value="Laptop">Laptop</option>
								<option value="Mousepad">Mousepad</option>
								<option value="Kursi">Gaming chair</option>
								<option value="Webcam">Webcam</option>
								<option value="Speaker">Speaker</option>
								<option value="Headset">Headset</option>
								<option value="Joystick">Joystick</option>
								<option value="Cooling Fan">Cooling Fan</option>
								<option value="Power Supply">Power Supply</option>
								<option value="PC Case">PC Case</option>
							</select></div></td>
					</tr>
					<tr>
						<td class="dt1">Deskripsi</td>
						<td><div class="txa"><textarea name="DB"></textarea></div></td>
					</tr>
					<tr>
						<td></td>
						<td class="dt2bt"><button type="submit" name="tambah">Tambah</button></td>
					</tr>
				</table>	
			</div>
			<div class="attdt"><center><img src="../../../img/barang/<?= $gb; ?>"></center><p>Gambar barang</p><input type="file" name="GB"></div>
			</form>
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