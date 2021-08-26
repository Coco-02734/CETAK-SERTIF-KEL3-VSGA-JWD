<!DOCTYPE html>
<html>

<head>
	<title>Tambah Sertifikat</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand">Hai Sertifikasi</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="cetak.php">Cetak Sertif <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="data-peserta.php">Data Peserta <span class="sr-only">(current)</span></a>
				</li>
		</div>
	</nav>

	<h3 class="font-weight-bold mt-3 ml-4 text-center">Halaman Cetak Sertifikat</h3>

	<form class="mt-3 ml-4 mb-5" action="proses/create.php" method="POST">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : Bambang" style="width: 50%" minlength="1" maxlength="30" required>
			<span class="text-danger" style="font-size: 13px;">*Maksimal 30 Huruf</span>
		</div>
		<div class="form-group">
			<label for="alaskota">Asal Kota</label>
			<input type="text" class="form-control" id="alaskota" name="kota" placeholder="Contoh : Semarang" style="width: 50%" required>
		</div>
		<div class="form-group">
			<label for="notlp">Nomor Telepon</label>
			<input type="text" class="form-control" id="notlp" name="no_telp" placeholder="Contoh : 081234556" style="width: 50%" required>
		</div>
		<div class="form-group">
			<label for="sebagai">Sebagai</label>
			<input type="text" class="form-control" id="sebagai" name="sebagai" placeholder="Contoh : Peserta" style="width: 50%" required>
		</div>
		<div class="form-group">
			<label for="tema">Tema</label>
			<input type="text" class="form-control" id="tema" name="tema" placeholder="Contoh : Cara Mendapatkan Beasiswa" style="width: 50%" required>
		</div>
		<div class="form-group">
			<label for="tgl">Tanggal Acara</label>
			<input type="text" class="form-control" id="tgl" name="tgl_acara" placeholder="Contoh : 12 Juli 2021" style="width: 50%" required>
		</div>
		<button type="submit" class="btn btn-success mt-2" style="width: 50%; border-radius: 5px;">Kirim Data</button>
	</form>

</body>

</html>