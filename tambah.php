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
						<div class="panel-heading">
							<span class="title"><b>Tambah Data Siswa</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_tambah.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">Nama Siswa</label>
									<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">
								</div>
								<div class="form-group">
									<label class="title">NIS Siswa</label>
									<input type="number" name="nis_siswa" class="form-control" placeholder="NIS Siswa">
								</div>
								<div class="form-group">
									<label class="title">Alamat Siswa</label>
									<textarea type="text" name="alamat_siswa" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label class="title">No Telepon Siswa</label>
									<input type="text" name="notelp_siswa" class="form-control" placeholder="No Telepon Siswa">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>