<?php

$konek = mysqli_connect("localhost","root","","db_nitrotech");


function query($query) {
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function query2($query2) {
	global $konek;
	$result = mysqli_query($konek, $query2);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function cari($SB) {
	$query = "SELECT * FROM `tb_benda` WHERE `nama_barang` LIKE '%$SB%' OR `kategori_barang` LIKE '%$SB%'";

	return query($query);
}

function tambah($TB) {
	global $konek;
	$nama = htmlspecialchars($TB['NB']);
	$harga = htmlspecialchars($TB['HB']);
	$stok = htmlspecialchars($TB['SB']);

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$kategori = htmlspecialchars($TB['KB']);
	$deskripsi = htmlspecialchars($TB['DB']);

	$query = "INSERT INTO `tb_benda` (`nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `kategori_barang`, `deskripsi_barang`, `id_barang`) VALUES ('$nama', '$harga', '$stok', '$gambar', '$kategori', '$deskripsi', '')";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function tambahuser($TU) {
	global $konek;
	$nama = htmlspecialchars($TU['nabar']);
	$harga = htmlspecialchars($TU['harbar']);
	$stok = htmlspecialchars($TU['stokbar']);
	$gambar = htmlspecialchars($TU['gambar']);
	$kategori = htmlspecialchars($TU['katbar']);
	$deskripsi = htmlspecialchars($TU['desbar']);
	$status = htmlspecialchars($TU['statbar']);
	$username = $TU['user'];

	$query = "INSERT INTO `tb_pesananuser` (`nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `kategori_barang`, `deskripsi_barang`, `id_barang`, `status`, `username`) VALUES ('$nama', '$harga', '$stok', '$gambar', '$kategori', '$deskripsi', '', '$status', '$username')";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function tambahadr($TA) {
	global $konek;
	$username = htmlspecialchars($TA['user']);
	$nama = htmlspecialchars($TA['namadt']);
	$jk = htmlspecialchars($TA['jkdt']);
	$no = htmlspecialchars($TA['nodt']);
	$email = htmlspecialchars($TA['emaildt']);
	$tgl = htmlspecialchars($TA['tldt']);

	$query = "INSERT INTO `tb_datadiri` (`id`, `username`, `nama_lengkap`, `jenis_kelamin`, `no_telepon`, `email`, `tanggal_lahir`) VALUES ('', '$username', '$nama', '$jk', '$no', '$email', '$tgl')";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function upload() {
	$NF = $_FILES['GB']['name'];
	$UF = $_FILES['GB']['size'];
	$error = $_FILES['GB']['error'];
	$PS = $_FILES['GB']['tmp_name'];

	if ( $error === 4 ) {
		echo "<script>
				alert('Masukan gambar terlebih dahulu');
			</script>";
		return false;
	}

	$KTF = ['jpg', 'jpeg', 'png'];
	$TF = explode('.', $NF);
	$TF = strtolower(end($TF));
	if (!in_array($TF, $KTF)) {
		echo "<script>
				alert('Jenis file yang anda masukkan salah');
			</script>";
		return false;
	}

	if ($UF > 5000000) {
		echo "<script>
				alert('Ukuran file terlalu besar');
			</script>";
		return false;
	}

	$NFN = uniqid();
	$NFN .= '.';
	$NFN .= $TF;

	move_uploaded_file($PS, '../../../img/barang/' . $NFN);

	return $NFN;
}


function hapus($id) {
	global $konek;
	mysqli_query($konek, "DELETE FROM `tb_benda` WHERE `tb_benda`.`id_barang` = '$id'");

	return mysqli_affected_rows($konek);
}

function ubah($UD) {
	global $konek;
	$id = $UD["id"];
	$nama = htmlspecialchars($UD['NB']);
	$harga = htmlspecialchars($UD['HB']);
	$stok = htmlspecialchars($UD['SB']);
	$kategori = htmlspecialchars($UD['KB']);
	$deskripsi = htmlspecialchars($UD['DB']);
	$gambarlama = htmlspecialchars($UD['GBL']);

	if ($_FILES['GB']['error'] === 4) {
		$gambar = $gambarlama;
	}else{
		$gambar = upload();
	}

	$query = "UPDATE `tb_benda` SET `nama_barang`='$nama',`harga_barang`='$harga',`stok_barang`='$stok',`gambar_barang`='$gambar',`kategori_barang`='$kategori',`deskripsi_barang`='$deskripsi' WHERE `id_barang` = '$id'";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function ubahadr($UA) {
	global $konek;
	$id = $UA["id"];
	$username = htmlspecialchars($UA['us']);
	$nama = htmlspecialchars($UA['namadt']);
	$jk = htmlspecialchars($UA['jkdt']);
	$no = $UA['nodt'];
	$email =($UA['emaildt']);
	$tgl = $UA['tldt'];

	$query = "UPDATE `tb_datadiri` SET `username`='$username',`nama_lengkap`='$nama',`jenis_kelamin`='$jk',`no_telepon`='$no',`email`='$email', `tanggal_lahir`='$tgl' WHERE `tb_datadiri`.`username` = '$username'";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}
function ubahuser($UU) {
	global $konek;
	$id = $UU["id"];
	$status = $UU['status'];

	$query = "UPDATE `tb_pesananuser` SET `status` = '$status' WHERE `tb_pesananuser`.`id_barang` = '$id'";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}



function registrasi($data) {
	global $konek;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($konek, $data["password"]);
	$password2 = mysqli_real_escape_string($konek, $data["password2"]);

	$result = mysqli_query($konek, "SELECT username FROM tb_user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terpakai');
			  </script>";
		return false;
	}

	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
			  </script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($konek, "INSERT INTO tb_user VALUES ('', '$username', '$password')");

	return mysqli_affected_rows($konek);



}






?>
