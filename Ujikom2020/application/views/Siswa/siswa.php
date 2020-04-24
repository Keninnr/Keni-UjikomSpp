<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title>Data Siswa</title>
</head>
<body>
    <div id="content-wrapper">
    <div class="container-fluid">
    <div class="card-body">
    <div class="ml-3">
		<a href="<?= site_url('C_siswa/forminput') ?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
	</div><br>
 
    
    <div class="table-responsive">
       
		<table id="dataTable" width="98%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nisn</th>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Telp</th>
                <th scope="col">ID Kelas</th>
                <th scope="col">ID Spp</th>
                <th scope="no-wrap">Opsi</th>
            </tr>
          </thead>

      
          <?php $i=1; ?>
          <?php foreach ($tsiswa as $s) { ?>

          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $s['nisn'] ?></td>
            <td><?php echo $s['nis'] ?></td>
            <td><?php echo $s['nama'] ?></td>
            <td><?php echo $s['alamat'] ?></td>
            <td><?php echo $s['no_telp'] ?></td>
            <td><?php echo $s['kompetensi_keahlian'] ?></td>
            <td><?php echo $s['tahun'] ?></td>
            <td>

              <a href="<?php echo site_url('C_siswa/formedit/'.$s['nisn']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
					   
             <a href="<?php echo site_url('C_siswa/delete/'.$s['nisn'])  ?>"onclick="return confirm('Yakin  nih mau dihapus')" 
              class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash-alt"></i></a>

            </td>
        </tr>


        <?php $i++; ?>
        <?php } ?>

        
      

    </table>
            </div>
            </div>
            </div>

</body>
</html>