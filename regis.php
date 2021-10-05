<?php 

require 'functions.php';

session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

if (isset($_SESSION["adm"])) {
	header("Location: user/admin/adminS.php");
	exit;
}

if (isset($_POST["register"])) {
	
	if (registrasi($_POST)>0) {
		echo "<script>
        		alert('akun berhasil dibuat!');
				document.location.href = 'login.php';
        	  </script>";
	}else{
		echo mysqli_error($konek);
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="regis.css">
</head>
<body>
<div class="container">
	<div class="pala"><img src="img/home/header/Logo.png"></div>
	<center><div class="pengguna">
				<div class="headser">
				<h2>Daftarkan akun</h2>
				<form action="" method="post">
					<table>
						<tr>
							<td><input type="text" name="username" id="username" placeholder="Ketik username di sini" maxlength="9" required autocomplete="off"></td>
						</tr>
						<tr>
							<td><input type="password" name="password" id="password" placeholder="Ketik password di sini" required></td>
						</tr>
						<tr>
							<td><input type="password" name="password2" id="password2" placeholder="Ketik konfirmasi password di sini" required></td>
						</tr>
					</table>
				<div class="input"><button type="submit" name="register">Daftar</button></div>
				<div class="login">Sudah memiliki akun?<a href="login.php">Masuk</a></div>
				</form>
				</div>
	</div></center>

	<div class="tujuh">
		
		<center><div class="layanan">
				<table>
					<tr>
						<td class="lyn"><center><h3>PAYMENT</h3></center></td>
						<td class="lyn"><center><h3>SHIPPING</h3></center></td>
						<td class="lyn"><center><h3>SERVICE</h3></center></td>
					</tr>
					<tr>
						<td class="lyn"><div class="pembayaran"><img src="img/home/tujuh/payment/bri.png"><img src="img/home/tujuh/payment/dana.png"></div></td>
						<td class="lyn"><div class="kurir"><img src="img/home/tujuh/shipping/jnt.png"></div></td>
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
						<td><a href="https://www.facebook.com/aldilan.180705/"><img src="img/home/tujuh/sosmed/fb.png"></a></td>
						<td><a href="https://www.instagram.com/ntroxygen/"><img src="img/home/tujuh/sosmed/ig.png"></a></td>
						<td><a href="https://wa.me/0895330019905"><img src="img/home/tujuh/sosmed/wa.png"></a></td>
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