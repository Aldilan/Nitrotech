<?php 
require 'functions.php';

session_start();

if (isset($_SESSION["adm"])) {
	header("Location: user/admin/adminS.php");
	exit;
}

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	$result = mysqli_query($konek, "SELECT username FROM tb_user WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);

	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($konek,"SELECT * FROM tb_user WHERE username = '$username'");

	if (mysqli_num_rows($result) === 1) {
		
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"]) ) {

			$_SESSION["login"] = true;

			if (isset($_POST["remember"])) {


				setcookie('id', $row['id'], time()+120);
				setcookie('key', hash('sha256', $row['username']), time()+120);
			}
			$_SESSION["username"] = $username;

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
	<div class="pala"><img src="img/home/header/Logo.png"></div>
	<center><div class="pengguna">
				<div class="headser">
				<h2>Masukkan akun</h2>
				<form action="" method="post">
					<table>
						<tr>
							<td class="inp"><input type="text" name="username" id="username" placeholder="Ketik username di sini" autocomplete="off"></td>
						</tr>
						<tr>
							<td class="inp"><input type="password" name="password" id="password" placeholder="Ketik password di sini"></td>
						</tr>
						<tr>
							<td><center>
								<?php if (isset($error)): ?>
									<p>username / password salah</p>
								<?php endif; ?>
							</td></center>
						</tr>
						<tr>
							<td colspan="3"><center><div class="rmb"><input type="checkbox" name="remember" id="remember"> <label for="remember">Ingat saya</label></div></center></td>
						</tr>
					</table>
				<div class="input"><button type="submit" name="login">Masuk</button></div>
				<div class="daftar">Belum memiliki akun?<a href="regis.php">Daftar</a></div>
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