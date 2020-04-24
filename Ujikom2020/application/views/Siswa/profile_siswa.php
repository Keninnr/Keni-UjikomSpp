<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title>PROFILE</title>

</head>
<body>

    <br><br><br><br>
    <div id="container">
	<div class="card w-50 mx-auto text-black">
    <div class="card-body">
		<h5 class="card-header">Profile</h5>
        
            <div class="form-row">
    			<div class="form-grup col-md-4">
    				<p>NIS </p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?= $profile->nis; ?></p>
    			</div>
    		</div>
            
    		<div class="form-row">
    			<div class="form-grup col-md-4">
    				<p>NAMA</p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?= $profile->nama; ?></p>
                </div>
            </div>


             <div class="form-row">
    			<div class="form-grup col-md-4">
    				<p>KELAS</p>
    			</div>
    		    <div class="form-grup col-md-4">
    			    <p class="card-text"><?= $profile->nama_kelas.' '.$profile->kompetensi_keahlian; ?></p>
                </div>
            </div>

            <div class="form-row">
    		    <div class="form-grup col-md-4">
    			    <p>No. TELEPON</p>
    		    </div>
    		    <div class="form-grup col-md-4">
    			    <p class="card-text"><?= $profile->no_telp; ?></p>
                </div>
            </div>

            <div class="form-row">
    	    	<div class="form-grup col-md-4">
    	    		<p>Alamat</p>
    	    	</div>
    	    	<div class="form-grup col-md-4">
                    <p class="card-text"><?= $profile->alamat ?></p>
                </div>
            </div>
			
			<center>
			<a href="<?= site_url('LoginSiswa/pass') ?>" class="btn btn-sm btn-primary"><i class="fa fa-lock"></i>&nbsp; Ubah Password</a> <br>
			<br>
            <center>
    		<a href="<?= site_url('LoginSiswa/logout') ?>" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </center>
        </div>
        </div>
        </div>


</body>
</html>