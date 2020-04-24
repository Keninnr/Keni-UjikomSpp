<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Spp</title>
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
		<form action="<?php echo site_url('C_spp/create/') ?>" method="POST">
			<div class="col">
			Tahun <br>
			<input type="text" name="tahun" class="form-control"><br>
			</div>
			<div class="col">
			Nominal <br>
			<input type="text" name="nominal"  class="form-control"><br>
			</div>
			<br>

			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
          		</div>
				<div class="form-group col-md-6">
            	    <a href="<?= site_url('C_spp/index') ?>" class="btn btn-success">Kembali</a>
            	</div>
		</div>
			</div>
		</form>
	</div>
	</div>
	
</body>
</html>