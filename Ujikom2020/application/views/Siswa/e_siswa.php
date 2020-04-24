<!DOCTYPE html>
<html>
<head>
	<title>EDIT Siswa</title>
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

			<?php if($dataEdit){
				$nisn=$dataEdit->nisn;
                $nis=$dataEdit->nis;
                $nama=$dataEdit->nama;
                $id_kelas=$dataEdit->id_kelas;
                $alamat=$dataEdit->alamat;
                $no_telp=$dataEdit->no_telp;
				$id_spp=$dataEdit->id_spp;
				$password=$dataEdit->password;


			}else{
                $nisn="";
                $nis="";
                $nama="";
                $id_kelas="";
                $alamat="";
                $no_telp="";
				$id_spp="";
				$password="";
				
			} ?>

    <div class="card-body">
		<form action="<?php echo site_url('C_siswa/update/' .$nisn) ?>" method="POST">
			NISN <br>
			<div class="col"> NISN
				<input type="text" name="nisn" value="<?php echo $nisn ?>" class="form-control"><br>
			</div>
			<div class="col">NIS
				<input type="text" name="nis" value="<?php echo $nis ?>" class="form-control"><br>
			</div>
			<div class="col">NAMA
				<input type="text" name="nama" value="<?php echo $nama ?>" class="form-control"><br>
			</div>
			<div class="col">ALAMAT			
				<textarea name="alamat"  value="" cols="30" rows="2" class="form-control"><?php echo $alamat ?></textarea>
			</div>
			<div class="col">NO. TELEPON
				<input type="text" name="no_telp" value=" <?php echo $no_telp?>" class="form-control"><br>
			</div>
			<div class="col">ID KELAS
				<input type="text" name="id_kelas" value="<?php echo $id_kelas ?>" class="form-control"><br>
			</div>
			<div class="col">ID SPP
				<input type="text" name="id_spp" value="<?php echo $id_spp ?>" class="form-control"><br>
			</div>
			<div class="col">PASSWORD
				<input type="text" name="password" value="<?php echo $password ?>" class="form-control"><br>
			</div>
			
            <br>
			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="edit">Edit</button>
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