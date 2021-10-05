<?php 

require '../../../functions.php';

$id = $_GET['id'];

if (hapus($id)>0) {
	echo "<script>
				alert('Data berhasil dihapus!');
				document.location.href = 'hapus.php';
			</script>";
}else{
	echo "<script>
				alert('Data gagal diubah!');
				document.location.href = 'hapus.php';
			</script>";
}

 ?>