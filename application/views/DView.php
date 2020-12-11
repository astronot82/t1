<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #000000">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('DController')?>" class="nav-link active">HOME</a>
			
			
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">User</a>
			
		</div>
	</nav>
	<div class="alert alert-info text-center mt-2 shadow">
		=== HALAMAN UTAMA ===
	</div>
<div class="container">
<table class="table table-bordered table-striped table-hover ">
		
		<tr class="text-center">
			
			<th>id_05</th>
			<th>kolom_jurusan</th>
			<th>kolom_kelas</th>
			<th>kolom_isi</th>
		</tr>

		<?php $no = 1; ?>
		<?php  foreach ($data_tabel as $key):?>
			<tr>
				
				<td><?= $key->id_05 ?></td>
				<td><?= $key->kolom_jurusan ?></td>
				<td><?= $key->kolom_kelas ?></td>
				<td><?= $key->kolom_isi ?></td>
	
			</tr>

 <?php endforeach ?>
 					<a href="<?= site_url('DController/tambah')?>" class="btn btn-success btn-sm">Tambah Data</a>
				    <a href="" class="btn btn-info btn-sm">EDIT</a>
					<a href="" class="btn btn-danger btn-sm">HAPUS</a>
					
	</table>
</div>
</body>
</html>