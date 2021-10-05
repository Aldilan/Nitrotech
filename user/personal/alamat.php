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

$katgor1 = 'Mouse';
$katgor2 = 'Keyboard';
$katgor3 = 'Cooling Fan';
$katgor4 = 'Power Supply';

$result = mysqli_query($konek,"SELECT * FROM tb_datadiri WHERE username = '$nama'");

if (mysqli_num_rows($result) === 0) {
	echo "<script>
        		alert('Kamu belum mengisi data diri!');
				document.location.href = 'alamat2.php';
          </script>";
}

$dt = query2("SELECT * FROM `tb_datadiri` WHERE `username` = '$nama'")[0];

$G = $dt['jenis_kelamin'];

if (isset($_POST['simpan'])) {
	if (ubahadr($_POST)>0) {
		echo "<script>
				alert('Data berhasil diubah!');
				document.location.href = 'alamat.php';
			</script>";
	}else{
		echo"<script>
				alert('Data gagal diubah!');
				document.location.href = 'alamat.php';
			</script>";
	}
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Diri</title>
	<link rel="stylesheet" type="text/css" href="alamat.css">
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
				<li><a href="alamat.php"><span class="mod">Data diri saya</span></a></li>
				<li><a href="pesananuser.php">Pesanan saya</a></li>
				<li><a href="jdadmin.php">Masuk menjadi admin</a></li>
				<li><a href="../../logout.php">Keluar</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Data Diri Saya</h2><span class="BHalamat">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</span></div>
			<div class="alamat">
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $dt['id']; ?>">
				<input type="hidden" name="us" value="<?= $dt['username']; ?>">
				<table>
					<tr>
						<td class="dt1">Username</td>
						<td class="dt2u"><div class="us"><?php echo $nama; ?></div></td>
					</tr>
					<tr>
						<td class="dt1">Nama Lengkap</td>
						<td class="dt2tx"><input type="text" name="namadt" value="<?= $dt['nama_lengkap']; ?>" required></td>
					</tr>
					<tr>
						<td class="dt1">Jenis Kelamin</td>
						<td class="dt2ra"><div class="kl"><input type="radio" name="jkdt" value="Laki-laki" required 
											<?php if ($G == 'Laki-laki') {
												echo 'checked';
											}?>>
			   							  <span class="jkl">Laki-laki</span>
										  <input type="radio" name="jkdt" value="Perempuan" required
										  	<?php if ($G == 'Perempuan') {
											echo 'checked';
											}?>>
										  <span class="jkp">Perempuan</span></div></td>
					</tr>
					<tr>
						<td class="dt1">No Telepon</td>
						<td class="dt2tx"><input type="number" name="nodt" value="<?= $dt['no_telepon']; ?>" required></td>
					</tr>
					<tr>
						<td class="dt1">Email</td>
						<td class="dt2tx"><input type="text" name="emaildt" value="<?= $dt['email']; ?>" required></td>
					</tr>
					<tr>
						<td class="dt1">Tanggal lahir</td>
						<td class="dt2"><div class="tl"><input type="date" name="tldt" value="<?= $dt['tanggal_lahir']; ?>" required></div></td>
					</tr>
					<tr>
						<td></td>
						<td class="dt2bt"><button type="submit" name="simpan">Simpan</button></td>
					</tr>
				</table>
			</form>
			</div>
			<div class="attdt"><center><h3>Perhatian</h3></center><p>Data yang diisi di sini akan digunakan saat user akan melakukan transaksi secara offline, ini menjadi syarat agar transaksi bisa dilakukan, jadi dimohon untuk mengisi data diri ini dengan benar agar tidak terjadi kesalahan saat pengambilan barang</p></div>
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