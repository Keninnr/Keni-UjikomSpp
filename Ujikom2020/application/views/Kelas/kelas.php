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
		    <a href="<?= site_url('C_kelas/forminput') ?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
	    </div><br>
     
        
    <div class="table-responsive">
    
         <table id="dataTable" width="100%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
             <thead class="thead-dark">
                 <tr>
                     <th scope="col">No</th>
                     <th scope="col">ID Kelas</th>
                     <th scope="col">Kelas</th>
                     <th scope="col">Kompetensi Keahlian</th>
                     <th scope="no-wrap">Opsi</th>
                 </tr>
             </thead>
             

                 <?php $i=1; ?>
                 <?php foreach ($tkelas as $k) { ?>

                 <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $k['id_kelas'] ?></td>
                     <td><?php echo $k['nama_kelas'] ?></td>
                     <td><?php echo $k['kompetensi_keahlian'] ?></td>
                     <td>
                        <a href="<?php echo site_url('C_kelas/formedit/'.$k['id_kelas'])?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
					    <a href="<?php echo site_url('C_kelas/delete/'.$k['id_kelas']) ?>"onclick="return confirm('Yakin  nih mau dihapus')" 
                        class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                    
                         
                     </td>
                 </tr>


        <?php $i++; ?>
        <?php } ?>
  
        <!-- <tbody>
            <td colspan="9">Data Tidak Ada</td>
        </tbody> -->
    </table>
    </div>
    </div>
    </div>
    


</body>
</html>