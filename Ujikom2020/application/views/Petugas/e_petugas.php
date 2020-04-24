<!DOCTYPE html>
<html>
<head>
	<title>EDIT Petugas</title>
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
				$id_petugas=$dataEdit->id_petugas;
                $username=$dataEdit->username;
                $password=$dataEdit->password;
                $nama_petugas=$dataEdit->nama_petugas;
                $level=$dataEdit->level;
                

			}else{
                $id_petugas="";
                $username="";
                $password="";
                $nama_petugas="";
                $level="";
                
				
			} ?>

    <div class="card-body">
		<form action="<?php echo site_url('C_petugas/update/' .$id_petugas) ?>" method="POST">
			<div class="col">
				ID Petugas <br>
				<input type="text" name="id_petugas" value="<?php echo $id_petugas ?>" class="form-control"><br>
			</div>
			<div class="col">
				Username <br>
           		<input type="text" name="username" value="<?php echo $username ?>" class="form-control"><br>
			</div>
			<div class="col">
           		Password <br>
           		<input type="text" name="password" value="<?php echo $password ?>" class="form-control"><br>
			</div>
			<div class="col">
           		Nama <br>
           		<input type="text" name="nama_petugas" value="<?php echo $nama_petugas?>" class="form-control"><br>
			</div>
			<div class="col">
            	Level <br>
            	<input type="text" name="level" value="<?php echo $level ?>" class="form-control"><br>
			</div>
			
			<div class="card-footer text-muted">
			<div class="row text-center">
				<div class="form-group col-md-6">
            		<button class="btn btn-primary" type="submit" name="edit">Edit</button>
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