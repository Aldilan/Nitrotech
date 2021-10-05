<?php 

session_start();

require '../../functions.php';

if ( !isset($_SESSION["login"])) {
	header("Location: ../admin/adminS.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: ../admin/adminS.php");
	exit;
}

$nama = $_SESSION["username"];

if (isset($_POST["masuk"])) {
	
	$psad = $_POST["psad"];

	$result = mysqli_query($konek,"SELECT * FROM tb_admin WHERE nama_admin = '$nama'");
   	if (mysqli_num_rows($result) === 0) {
   		echo "<script>
       	 		alert('kamu tidak bekerja di Nitrotech');
        	  </script>";
	} else {
		if ($psad == 'ntroxygen' ) {
			$_SESSION["psad"] = $psad;
			$_SESSION["adm"] = true;
			header("Location: ../admin/adminS.php");
			exit;
		}else{
			echo "<script>
        			alert('kamu tidak bekerja di Nitrotech');
      		     </script>";	
		}
	}
	$error = true;
}

$katgor1 = 'Mouse';
$katgor2 = 'Keyboard';
$katgor3 = 'Cooling Fan';
$katgor4 = 'Power Supply';



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Masuk Sebagai Admin</title>
	<link rel="stylesheet" type="text/css" href="jdadmin.css">
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
				<li><a href="jdadmin.php"><span class="mod">Masuk menjadi admin</span></a></li>
				<li><a href="../../logout.php">Keluar</a></li>
			</ul>
		</div>
		<div class="ctn">
			<div class="Halamat"><h2>Masuk menjadi admin</h2><span class="BHalamat">Data user akan dikirim untuk verifikasi admin</span></div>
			<div class="alamat">
			<form action="" method="post">
				<table>
					<tr>
						<td class="dt1">Username</td>
						<td class="dt2u"><div class="us"><?php echo $nama; ?></div></td>
					</tr>
					<tr>
						<td class="dt1">Password</td>
						<td class="dt2ps"><input type="password" name="psad"></td>
					</tr>
					<tr>
						<td></td>
						<td class="dt2p"><p><span class="btg">*</span>password berisi kata sandi rahasia yang diberikan khusus untuk para<span class="dt2p2">pekerja yang berkerja di Nitrotech</span></p></td>
					</tr>
					<tr>
						<td></td>
						<td class="dt2bt"><button type="submit" name="masuk">Masuk</button></td>
					</tr>
				</table>
			</form>
			</div>
			<div class="attdt"><center><h3>Perhatian</h3></center><p>Ketika anda masuk ke dalam mode admin, anda bisa mengubah, menghapus, dan menambah barang yang dijual di sini, namun walau anda tahu passwordnya ada kemungkinan anda tidak bisa masuk, karena syarat wajib masuk adalah harus pekerja dari Nitrotech</p></div>
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