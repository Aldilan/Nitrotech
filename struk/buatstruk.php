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

$result = mysqli_query($konek,"SELECT * FROM tb_datadiri WHERE username = '$nama'");

if (mysqli_num_rows($result) === 0) {
	echo "<script>
        		alert('Kamu belum mengisi data diri!');
				document.location.href = '../user/personal/alamat2.php';
          </script>";
}

$nama = $_SESSION["username"];

$id = $_GET['id'];

$bp = query2("SELECT * FROM `tb_pesananuser` WHERE `id_barang` = '$id'")[0];

if (isset($_POST['buat'])) {
	if (ubahuser($_POST)>0) {
		echo "<script>
				alert('Struk berhasil dibuat!');
				document.location.href = '../user/personal/pesananuser.php';
			</script>";
	}else{
		echo "<script>
				alert('Struk gagal dibuat!');
				document.location.href = '../user/personal/pesananuser.php';
			</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Buat Struk</title>
	<link rel="stylesheet" type="text/css" href="buatstruk.css">
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
				<td class="keranjang"><a href="keranjang.html"><button><img src="../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="../kategori/Okategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="../user/personal/userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>
	<div class="profil">
		<center><div class="ctn">
			<div class="headkat">
					<table>
						<tr>
							<td><h1>Verifikasi barang dan data diri</h1></td>
						</tr>
						<tr>
							<td rowspan="1"><img src="../img/barang/<?php echo $bp['gambar_barang']; ?>"> </td>
						</tr>
						<tr>
							<td><h3><?php echo $bp['nama_barang']; ?></h3></td>
						</tr>
						<tr>
							<td><span class="kagor"><?php echo $bp['kategori_barang']; ?></span></td>
						</tr>
						<tr>
							<td>Rp <span class="rp"><?php echo $bp['harga_barang']; ?></span></td>
						</tr>
						<tr>
							<td><h4>Deskripsi Produk</h4></td>
						</tr>
						<tr>
							<td>
								<div class="des"><p><?php echo $bp['deskripsi_barang']; ?></p></div>
							</td>
						</tr>
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $bp['id_barang']; ?>">
					<input type="hidden" name="status" value="sudah dibayar">
						<tr>
							<td colspan="2"><button type="submit" name="buat">Buat struk</button></td>
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