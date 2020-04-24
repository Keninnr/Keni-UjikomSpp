<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini Petugas</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    
    <br>
    <div id="container">
    <div class="card w-50 mx-auto">
    <div class="card-header bg-danger text-white">
		<h2>Cari Data Siswa</h2>
	</div>
    <br>
    
	<div class="content-home">
		
		<form method="post" action="<?= site_url('C_pembayaran/search_siswa') ?>" class="form-group col-md-6">
			Masukan NIS Siswa :
			<input type="text" name="nis" required="" placeholder="NIS Siswa..." class="form-control"><br>
			<button class="btn btn-sm btn-success"><i class="fa fa-search"></i>&nbsp;&nbsp;Cari</button>
		</form>
	</div>

    </div>
    </div>
 
</body>
</html>