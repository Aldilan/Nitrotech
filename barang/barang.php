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

$bt = query2("SELECT * FROM `tb_benda` WHERE `id_barang` = '$id'")[0];

if (isset($_POST['masuk'])) {
	if (tambahuser($_POST)>0) {
		echo "<script>
				alert('Barang berhasil ditambahkan!');
				document.location.href = '../user/personal/pesananuser.php';
			</script>";
	}else{
		echo "<script>
				alert('Barang gagal ditambahkan!');
				document.location.href = '../index.php';
			</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $bt['nama_barang']; ?></title>
	<link rel="stylesheet" type="text/css" href="barang.css">
</head>
<body>
<div class="container">
	<div class="header">
		<table>
			<tr>
				<td class="logo"><a href="../index.php"><img src="../img/home/header/Logo.png"></a></td>
				<form action="../search box/pencarian.php" method="post">
				<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
				<td class="pencar"><button type="submit" name="lihat"><img src="../img/home/header/MG.png"></button></td>
				</form>
				<td class="keranjang"><a href="../user/personal/pesananuser.php"><button><img src="../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>
	<div class="profil">
		<center><div class="ctn">
			<div class="headkat">
				<form action="" method="post">
					<input type="hidden" name="nabar" value="<?php echo $bt['nama_barang']; ?>">
					<input type="hidden" name="harbar" value="<?php echo $bt['harga_barang']; ?>">
					<input type="hidden" name="stokbar" value="<?php echo $bt['stok_barang']; ?>">
					<input type="hidden" name="gambar" value="<?php echo $bt['gambar_barang']; ?>">
					<input type="hidden" name="katbar" value="<?php echo $bt['kategori_barang']; ?>">
					<input type="hidden" name="desbar" value="<?php echo $bt['deskripsi_barang']; ?>">
					<input type="hidden" name="idbar" value="<?php echo $bt['id_barang']; ?>">
					<input type="hidden" name="statbar" value="belum dibayar">
					<input type="hidden" name="user" value="<?php echo $nama; ?>">
					<table>
						<tr>
							<td rowspan="1"><img src="../img/barang/<?php echo $bt['gambar_barang']; ?>"> </td>
						</tr>
						<tr>
							<td><h1><?php echo $bt['nama_barang']; ?></h1></td>
						</tr>
						<tr>
							<td colspan="2"><span class="kagor"><?php echo $bt['kategori_barang']; ?></span></td>
						</tr>
						<tr>
							<td colspan="2">Rp <span class="rp"><?php echo $bt['harga_barang']; ?></span></td>
						</tr>
						<tr>
							<td colspan="2"><h2>Deskripsi Produk</h2></td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="des"><p><?php echo $bt['deskripsi_barang']; ?></p></div>
							</td>
						</tr>
						<tr>
							<td colspan="2"><button type="submit" name="masuk">Masukkan ke keranjang?</button></td>
						</tr>
					</table>
				</form>
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