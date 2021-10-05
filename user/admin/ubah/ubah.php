<?php 

session_start();

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

require '../../../functions.php';

if ($psad !== 'ntroxygen') {
 	echo "<script>
        	alert('password admin salah');
			document.location.href = '../../personal/jdadmin.php';
         </script>";
 }



$jdph = 8;
$jd = count(query("SELECT * FROM tb_benda"));
$jh = ceil($jd / $jdph);
$ha = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$ad = ($jdph * $ha) - $jdph;

$barang = query("SELECT * FROM tb_benda LIMIT $ad, $jdph");


?>



<!DOCTYPE html>
<html>
<head>
	<title>Pilih Data</title>
	<link rel="stylesheet" type="text/css" href="ubah.css">
</head>
<body>
<div class="container">
	<div class="pala"><img src="../../../img/home/header/Logo.png"></div>
	<center><div class="pengguna">
			<?php foreach ($barang as $row) : ?>
			<center>
				<div class="headkat">
					<table>
						<tr>
							<td><img src="../../../img/barang/<?php echo $row["gambar_barang"]; ?>"></td>
							<td><span class="namabarang"><?php echo $row["nama_barang"]; ?></span></td>
						</tr>
						<tr>
							<td><span class="kago"><?php echo $row["kategori_barang"]; ?></span></td>
							<td>Rp <span class="hargabarang"><?php echo $row["harga_barang"]; ?></span></td>
						</tr>
						<tr>
							<td>Stock : <span class="stokbarang"><?php echo $row["stok_barang"]; ?></span></td>
							<td></td>
							<td class="dlt"><a href="ubahN.php?id=<?php echo $row['id_barang'];?>"><button><img src="../../../img/edit/edit 1/ubah.png"></button></a></td>
						</tr>
					</table>
				</div>
			</center>
		<?php endforeach; ?>	
	</div></center>

	<center><div class="hal">
		<?php if ($ha >1 ) : ?>
			<a href="?nama=<?= $nama; ?>&psad=<?= $psad; ?>&halaman=<?= $ha - 1 ?>">&laquo;</a>
		<?php endif; ?>

		<?php for ( $i = 1; $i <= $jh; $i++) : ?>
			<?php if ($i == $ha) : ?>
				<a href="?nama=<?= $nama; ?>&psad=<?= $psad; ?>&halaman=<?= $i; ?>" style="font-weight: bold; color : white; text-decoration: underline;"><?= $i; ?></a>
			<?php else : ?>
				<a href="?nama=<?= $nama; ?>&psad=<?= $psad; ?>&halaman=<?= $i; ?>"><?= $i; ?></a>
			<?php endif; ?>
		<?php endfor; ?>
		<?php if ($ha < $jh ) : ?>
			<a href="?nama=<?= $nama; ?>&psad=<?= $psad; ?>&halaman=<?= $ha + 1 ?>">&raquo;</a>
		<?php endif; ?>
	</div></center>
	<div class="sbl">
		<form action="../adminS.php" method="post">
			<input type="hidden" name="nama" value="<?= $nama; ?>">
			<input type="hidden" name="psad" value="<?= $psad; ?>">
			<button type="submit" name="blk">Kembali ke menu</button>
		</form>
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