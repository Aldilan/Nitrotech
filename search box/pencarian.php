<?php 

require '../functions.php';


session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: ../login.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: ../user/admin/adminS.php");
	exit;
}

$nama = $_SESSION["username"];

$barang = query("SELECT * FROM tb_benda");

if (isset($_POST['lihat'])) {
	$barang = cari($_POST['SB']);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
	<link rel="stylesheet" type="text/css" href="pencarian.css">
</head>
<body>
<div class="container">

	<div class="header">
		<table>
			<tr>
				<td class="logo"><a href="../index.php"><img src="../img/home/header/Logo.png"></a></td>
				<form action="search/pencarian.php" method="post">
				<td class="carbar"><input type="text" name="SB" placeholder="Cari barang anda di sini" required autocomplete="off"></td>
				<td class="pencar"><button type="submit" name="lihat"><img src="../img/home/header/MG.png"></button></td>
				</form>
				<td class="keranjang"><a href="keranjang.html"><button><img src="../img/home/header/keranjang.png"></button></a></td>
				<td class="katgor"><center><a href="kategori/Pkategori.php"><h1>Kategori Barang</h1></a></center></td>
				<td class="user"><a href="../user/personal/userA.php"><h1><?php echo $nama; ?></h1></a></td>
			</tr>
		</table>
	</div>
	
	<div class="profil">
		<div class="ops">
			<h1>Kategori</h1>
			<ul>
				<li><a href="../kategori/Okategori.php">Headset Gaming</a></li>
				<li><a href="../kategori/Okategori.php">Hotdeals 2021</a></li>
				<li><a href="../kategori/Okategori.php">Gaming Chair</a></li>
				<li><a href="../kategori/Okategori.php">Produk Terbaru</a></li>
				<li><a href="../index.php">Home</a></li>
			</ul>
		</div>
		<div class="ctn">
			<?php foreach ($barang as $row) : ?>
				<div class="headkat">
					<table>
						<tr>
							<td><center><img src="../img/barang/<?php echo $row["gambar_barang"];?>"></center></td>
						</tr>
						<tr>
							<td><a href="../barang/barang.php?id=<?php echo $row["id_barang"]; ?>"><h1><?php echo $row["nama_barang"]; ?></h1></a></td>
						</tr>
						<tr>
							<td><p>Rp <span class="harga"><?php echo $row["harga_barang"]; ?></span></p><div class="krj"><a href="../barang/barang.php?id=<?php echo $row["id_barang"]; ?>"><img src="../img/home/header/keranjang.png"></a></div></td>
						</tr>
					</table>
				</div>
			<?php endforeach; ?>
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