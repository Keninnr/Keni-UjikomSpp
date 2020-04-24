<!DOCTYPE html>
<html>
<head>
	<title>Tambah siswa</title>
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
		<form action="<?php echo site_url('C_siswa/create/') ?>" method="POST">
				<div class="col">
                    <input type="text" name="nisn" required="" placeholder="Masukan NISN..." class="form-control">
        		</div><br>
		
				<div class="col">					
					<input type="text" name="nis" required="" placeholder="Masukan NIS..." class="form-control">
				</div><br>

				<div class="col">
					<input type="text" name="nama" required="" placeholder="Masukan Nama..." class="form-control">
				</div>

				<div class="col"><br>
					<textarea name="alamat" id="" cols="30" rows="2" required="" placeholder="Masukan ALAMAT..." class="form-control"></textarea>
					<br>
				</div>

				<div class="col">
					<input type="text" name="no_telp" required="" placeholder="Masukan No. Telepon Anda..." class="form-control"><br>
				</div>

				<div class="col">
					<input type="text" name="id_kelas" required="" placeholder="Masukan id_kelas..." class="form-control"><br>
				</div>

				<div class="col">
					<input type="text" name="id_spp" required="" placeholder="Masukan id_spp..." class="form-control"><br>
				</div>

				<div class="col">
					<input type="text" name="password" required="" placeholder="Masukan Password..." class="form-control"><br>
				</div>
			</div>

			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
            			<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
          			</div>
					<div class="form-group col-md-6">
            		    <a href="<?= site_url('C_siswa/index') ?>" class="btn btn-success">Kembali</a>
            		</div>
				</div>
			</div>
		
		</form>
		
	</div>
	</div>
	
	</div>
</body>
</html>