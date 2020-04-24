<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE | PASSWORD</title>
</head>
<body>

<br><br>
    <div id="container">
    	<div class="card w-50 mx-auto text-black">
            <div class="card-body">
    		    <h5 class="card-header">Profile</h5>
        
        <div class="form-row">
            <form action="<?= site_url('LoginSiswa/ubah_password')?>" method="post" class="form-group col-md-6">
        			<div class="col">
        				Password Lama
                        <input type="password" name="last_pass" required="" placeholder="Masukan Password..." class="form-control">
        			</div>
        			<div class="col">
                        Password Baru
                        <input type="password" name="new_pass" required="" placeholder="Masukan Password..." class="form-control">
        			</div>
   			        <div class="col">
                    Konfirmasi Password
                        <input type="password" name="new_pass2" required="" placeholder="Masukan Password..." class="form-control">
        			</div>
                    <br>
                    <div class="col">
        			    <button class="btn btn-sm btn-success">Simpan</button>
                    </div>
            </form>
            </div>
        </div>
    </div>

</body>
</html>