<?php

include 'koneksi.php';

$id_siswa		= $_GET['id_siswa'];

$hapus			= mysqli_query($conn, "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus');document.location.href='index.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Dihapus');document.location.href='index.php''</script>";
		
}

?>