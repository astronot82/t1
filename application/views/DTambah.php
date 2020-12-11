<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	
	<a class="btn btn-Danger btn-sm float-right text-dark " href="<?= site_url('DView')?>">KEMBALI</a>
	
	<div class="p-5 mb-7 bg-info text-white"><b>	TAMBAH MAHASISWA</b>
<hr>
		<div class="col-md-4">
<form action="<?php echo site_url('DController/simpan_data') ?>" method="post">
		<div class=" form-group col-md-4">
		<label>jurusan</label>
		<input type="text" name="kolom_jurusan"><br>
		<label>kelas</label>
		<input type="text" name="kolom_kelas"><br>
		<label>isi</label>
		<input type="text" name="kolom_isi"><br>

		<input type="submit" name="submit" value="simpan" class="btn btn-success btn-sm float-right">
</form>
</div>
</body>
</html>