<?php

include 'koneksi.php';

$nama_siswa		= $_POST['nama_siswa'];
$nis_siswa		= $_POST['nis_siswa'];
$alamat_siswa	= $_POST['alamat_siswa'];
$notelp_siswa	= $_POST['notelp_siswa'];

$input			= mysqli_query($conn, "INSERT INTO data_siswa (nama_siswa, nis_siswa, alamat_siswa, notelp_siswa) VALUES ('$nama_siswa', '$nis_siswa','$alamat_siswa' , '$notelp_siswa')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='index.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah.php'</script>";
		
}
?>