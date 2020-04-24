<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title>Data Kelas</title>
</head>
<body>


    <div id="content-wrapper">
    <div class="container-fluid">
    <div class="card-body">
        <div class="ml-3">
		    <a href="<?= site_url('C_spp/forminput') ?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
	    </div><br>

       
        <div class="table-responsive">
    
    <table id="dataTable" width="100%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">    
    <thead class="thead-dark">
        <tr>
   
            <th scope="col">ID Spp</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nominal</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($tspp as $sp) { ?>

        <tr>

            <td><?php echo $sp['id_spp'] ?></td>
            <td><?php echo $sp['tahun'] ?></td>
            <td>Rp. <?php echo $sp['nominal'] ?></td>
            <td>

                    <a href="<?php echo site_url('C_spp/formedit/'.$sp['id_spp']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
					<a href="<?php echo site_url('C_spp/delete/'.$sp['id_spp']) ?>"onclick="return confirm('Yakin  nih mau dihapus')" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt">
                    </i></a>

                
            </td>
        </tr>


        <?php } ?>
    </tbody>
    </table>
    
    </div>
    </div>
    </div>
</body>
</html>