<html>
<head>
	<title>CRUD PHP MYSQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="row">
		<div class="container-fuild">
			<div class="row">
				<br>
				<br>
				<div class="col-md-8 col-md-offset-2">
					<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
					<br>
					<br>
					<div class="panel panel-default">
						<?php
							include 'koneksi.php';

							$id_siswa	= $_GET['id_siswa'];

							$lihat		= mysqli_query($conn, "SELECT * FROM data_siswa WHERE id_siswa = '$id_siswa'");
							if (mysqli_num_rows($lihat) == 0) {
								echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
							}else{
							$no = 1;
							while($data = mysqli_fetch_array($lihat)) {
						?>
						<div class="panel-heading">
							<span class="title"><b>Edit Data Siswa <span class="text text-danger"></span></b></span>
						</div>
						<div class="panel-body">
							<form action="proses_edit.php" method="POST" class="form">
								<input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']?>">
								<div class="form-group">
									<label class="title">Nama Siswa</label>
									<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa']?>">
								</div>
								<div class="form-group">
									<label class="title">NIS Siswa</label>
									<input type="number" name="nis_siswa" class="form-control" value="<?php echo $data['nis_siswa']?>">
								</div>
								<div class="form-group">
									<label class="title">Alamat Siswa</label>
									<textarea type="text" name="alamat_siswa" class="form-control"><?php echo $data['alamat_siswa']?></textarea>
								</div>
								<div class="form-group">
									<label class="title">No Telepon Siswa</label>
									<input type="text" name="notelp_siswa" class="form-control" value="<?php echo $data['notelp_siswa']?>">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
								</div>
							</form>
						</div>
						<?php }}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>