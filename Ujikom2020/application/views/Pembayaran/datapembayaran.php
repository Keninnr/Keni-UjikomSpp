<!DOCTYPE html>
<html>
<head>
	<title>Data Pembayaran SPP | SPP</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>


    <div id="content-wrapper">
    <div class="container-fluid">
    <div class="card-body">
	
	<div class="row">
	<div class="ml-3">
			<a class="nav-link btn btn-outline-danger " href="<?= site_url('C_pdf/pdf') ?>">
			<i class="fas fa-fw fa-file-pdf"></i>  Export PDF
		</a>
	</div>
	</div><br>
	
       
    <div class="table-responsive">
    
    <table id="dataTable" width="100%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
        <thead class="thead-dark">
  
            <tr>
                <th scope="col" >No</th>
                <th scope="col" >ID Petugas</th>
                <th scope="col" >NIS</th>
                <th scope="col" >Nama</th>
                <th scope="col" >Tanggal Pembayaran</th>
                <th scope="col" >Bulan Pembayaran</th>
                <th scope="col" >Tahun Bayar</th>
                <th scope="no-wrap" >Jumlah Pembayaran</th>
	

            </tr>

        </thead>
			<?php 
				$no=1;
				$bulanbayar=0;
				$jumlahbayar=0; 

				$data_bulan_nama = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

				foreach($pembayaran as $p){
					for ($i=0; $i < $p['bulan_bayar']; $i++) { 
						$nama_bulan = $data_bulan_nama[$i];
					}
				?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p['nama_petugas'] ?></td>
				<td><?php echo $p['nis'] ?></td>
				<td><?php echo $p['nama'] ?></td>
				<td><?php echo $p['tgl_bayar'] ?></td>
                <td><?php echo $nama_bulan; ?></td>
				<td><?php echo 'Tahun Ke '.$p['tahun_bayar'] ?></td>				
				<td><?php echo 'Rp.'.$p['jumlah_bayar'].';' ?></td>
				
			</tr>
			<?php 
				$bulanbayar = $bulanbayar+$p['bulan_bayar'];
				$jumlahbayar = $jumlahbayar+$p['jumlah_bayar'];
			} ?>
            <thead class="thead-dark">
			<tr>
				<th colspan="7" >Total:</th>
				<th colspan="2"><?php echo 'Rp.'.$jumlahbayar.';'; ?></th>
			</tr>
            </thead>
		</table>
	</div>
    </div>
    </div>

	<br><br><br>
</body>
</html>