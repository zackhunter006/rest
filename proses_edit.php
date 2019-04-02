<?php

include 'koneksi.php';

$id_siswa		= $_POST['id_siswa'];
$nama_siswa		= $_POST['nama_siswa'];
$nis_siswa		= $_POST['nis_siswa'];
$alamat_siswa	= $_POST['alamat_siswa'];
$notelp_siswa	= $_POST['notelp_siswa'];

$update			= mysqli_query($conn, "UPDATE data_siswa SET nama_siswa = '$nama_siswa', nis_siswa = '$nis_siswa', alamat_siswa = '$alamat_siswa', notelp_siswa = '$notelp_siswa' WHERE id_siswa = '$id_siswa'");

if($update){
	echo "<script>alert('Data Berhasil Diedit');document.location.href='index.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Diedit');document.location.href='edit.php?id_siswa='$id_siswa''</script>";
		
}
?>