<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kelas</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/css/jquery.dataTables.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
</head>
<body>
<br><br>
	<div id="container">
	<div class="card w-50 mx-auto">
	<div class="card-header bg-dark text-white">
		<h2>Tambah Data</h2>
	</div>
	
			

	<div class="card-body">
		<form action="<?php echo site_url('C_kelas/create/') ?>" method="POST">
		<div class="col">KELAS
			<input type="text" name="nama_kelas" require="" class="form-control"><br>
		</div> 
		<div class="col">KOMPETENSI KEAHLIAN
			<input type="text" name="kompetensi_keahlian"   require="" class="form-control"><br>
		</div>
			
			<br>

			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
          		</div>
				<div class="form-group col-md-6">
            	    <a href="<?= site_url('C_kelas/index') ?>" class="btn btn-success">Kembali</a>
            	</div>
			</div>
			</div>
		</form>
	</div>
	</div>
	</div>
	
</body>
</html>