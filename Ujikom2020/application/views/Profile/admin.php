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
    				<p>Nama  </p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->nama_petugas; ?></p>
    			</div>
    		</div>
    		<div class="row">
    			<div class="form-grup col-md-4">
    				<p>Username</p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->username; ?></p>
            <br><br>
			
			<center>
			<a href="<?php echo site_url('Login/pass') ?>" class="btn btn-sm btn-primary"><i class="fa fa-lock"></i>&nbsp; Ubah Password</a> <br>
			<br>
            <center>
    		<a href="<?php echo site_url('Login/logout') ?>" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </center>
        </div>
        </div>
        </div>


</body>
</html>