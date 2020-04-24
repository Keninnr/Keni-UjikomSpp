<!DOCTYPE html>
<html>
<head>
	<title>EDIT Kelas</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/css/jquery.dataTables.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
</head>
<body><br><br><br><br><br>
	<div id="container">
	<div class="card w-50 mx-auto">
	<div class="card-header bg-dark text-white">
		<h2>Edit Data</h2>
	</div>
			

			<?php if($dataEdit){
				$id=$dataEdit->id_kelas;
				$nama_kelas=$dataEdit->nama_kelas;
				$kompetensi_keahlian=$dataEdit->kompetensi_keahlian;


			}else{
				$id_kelas="";
				$nama_kelas="";
				$kompetensi_keahlian="";
			} ?>

	<div class="card-body">

		<form action="<?php echo site_url('C_kelas/update/' .$id) ?>" method="POST">
			<div class="col">
			Kelas <br>
			<input type="text" name="nama_kelas" value="<?php echo $nama_kelas ?>" class="form-control"><br>
			</div>
			<div class="col">
			Kompetensi Keahlian <br>
			<input type="text" name="kompetensi_keahlian" value="<?php echo $kompetensi_keahlian ?>"  class="form-control"><br>
			</div>

			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="edit">Edit</button>
          		</div>
				<div class="form-group col-md-6">
            	    <a href="<?= site_url('C_kelas/index') ?>" class="btn btn-success">Kembali</a>
            	</div>
			</div>
			</div>
			</div>
			
		</form>
	</div>
	</div>
</body>
</html>