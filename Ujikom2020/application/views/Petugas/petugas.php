<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title>Data Petugas</title>
</head>
<body>

    <div id="content-wrapper">
    <div class="container-fluid">
    <div class="card-body">
        <div class="ml-3">
		    <a href="<?= site_url('C_petugas/forminput') ?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
	    </div><br>
     
        
    <div class="table-responsive">
    
         <table id="dataTable" width="100%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
             <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Level</th>
            <th scope="no-wrap">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        <?php foreach ($tpetugas as $p) { ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $p['id_petugas'] ?></td>
            <td><?php echo $p['username'] ?></td>
            <td><?php echo $p['password'] ?></td>
            <td><?php echo $p['nama_petugas'] ?></td>
            <td><?php echo $p['level'] ?></td>
            <td>
                <a href="<?php echo site_url('C_petugas/formedit/'.$p['id_petugas']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
				
                <a href="<?php echo site_url('C_petugas/delete/'.$p['id_petugas']) ?>"onclick="return confirm('Yakin  nih mau dihapus')" 
                class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
            </td>
        </tr>


        <?php $i++; ?>
        <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>

</body>
</html>