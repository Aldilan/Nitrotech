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


$id = $_GET['id'];

$brg = query("SELECT * FROM `tb_benda` WHERE `id_barang` = '$id'")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST)>0) {
		echo "<script>
				alert('Data berhasil diubah!');
				document.location.href = 'ubah.php';
			</script>";
	}else{
		echo "<script>
				alert('Data gagal diubah!');
				document.location.href = 'ubah.php';
			</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="ubahN.css">
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
				<li><a href="ubahN.php?id=<?php echo $id ;?>"><span class="mod">Pindah ke ubah data</span></a></li>
				<li><a href="../tambah/tambah.php">Pindah ke tambah data</a></li>
				<li><a href="../hapus/hapus.php">Pindah ke hapus data</a></li>
				<li><a href="../lihat/lihat.php">Pindah ke penjualan</a></li>
				<li><a href="../lihat/lihatP.php">Pindah ke penghasilan </a></li>
				<li><a href="ubah.php">Kembali</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Ubah Data</h2><span class="BHalamat">Data barang yang baru akan menggantikan data barang yang lama</span></div>
			<div class="alamat">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $brg['id_barang']; ?>">
				<input type="hidden" name="GBL" value="<?= $brg['gambar_barang']; ?>">
				<table>
					<tr>
						<td class="dt1">Nama barang</td>
						<td class="dt2ps"><input type="text" name="NB" required value="<?= $brg['nama_barang']; ?>"></td>
					</tr>
					<tr>
						<td class="dt1">Harga</td>
						<td class="dt2ps"><input type="number" name="HB" required value="<?= $brg['harga_barang']; ?>"></td>
					</tr>
					<tr>
						<td class="dt1">Stok</td>
						<td class="dt2ps"><input type="number" name="SB" required value="<?= $brg['stok_barang']; ?>"></td>
					</tr>
					<tr>
						<td class="dt1">Kategori</td>
						<td><div class="slc"><select id="KB" name="KB" value="<?= $brg['kategori_barang']; ?>">
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
						<td><div class="txa"><textarea name="DB"><?php echo $brg['deskripsi_barang']; ?></textarea></div></td>
					</tr>
					<tr>
						<td></td>
						<td class="dt2bt"><button type="submit" name="ubah">Ubah</button></td>
					</tr>
				</table>	
			</div>
			<div class="attdt"><center><img src="../../../img/barang/<?= $brg['gambar_barang']; ?>"></center><p>Gambar barang</p><input type="file" name="GB"></div>
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