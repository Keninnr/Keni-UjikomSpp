<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Petugas</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/css/jquery.dataTables.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
</head>
<body>
<div id="container">
	<div class="card w-50 mx-auto">
	<div class="card-header bg-dark text-white">
		<h2>Tambah Data</h2>
	</div>

	<div class="card-body">
		<form action="<?php echo site_url('C_petugas/create') ?>" method="POST">
		<div class="col">
				Username <br>
				<input type="text" name="username" class="form-control"><br>
			</div>
			<div class="col">
				Password <br>
            	<input type="text" name="password" class="form-control"><br>
			</div>
			<div class="col">
            	Nama Lengkap <br>
				<input type="text" name="nama_petugas" class="form-control"><br><br>
			</div>
			<div class="col">
				Level
				<select name="level" class="form-control" >
				<option value="">-- Pilih Level</option>
				<option value="admin">Sebagai Admin</option>
				<option value="petugas">Sebagai Petugas</option>
			</select><br>
			</div>
           
			<br>
	
			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
          		</div>
				<div class="form-group col-md-6">
            	    <a href="<?= site_url('C_petugas/index') ?>" class="btn btn-success">Kembali</a>
            	</div>
			</div>
			</div>
		</form>
	</div>
	</div>

</body>
</html>