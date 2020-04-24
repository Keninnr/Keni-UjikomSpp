<!DOCTYPE html>
<html><head>
	<title>Data Pembayaran SPP | SPP</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<!-- <link rel="stylesheet" href="<?= base_url('assets/pdf.css')?>"> -->

	<style type="text/css">
		html {
			position: relative;
		}

		@page {
		    size: A4;
		}

		h1 {
		 
		    font-size: 20pt;
		    text-align: center;
		}

		table {
		    border-collapse: collapse;
		    width: 100%;
		}
		table th {
		    background-color: #4CAF50;
		    color: white;
		    padding: 15px;
		    text-align: center;
		  }	  
		table td {
		  padding: 15px;
		  text-align: center;
		}
		.tr {
		    background-color: #4CAF50;
		    color: white;
		}
		.text-center {
		    text-align: center;
		}
	</style>

</head><body class="A4">

	<section class="sheet padding-10mm">
	<h1>PEMBAYARAN SPP
	<br>DATA PEMBAYARAN SELURUH SISWA</h1>
       



    <hr class="line-little">
    <table>
            <tr>
                <th>No</th>
                <th>ID Petugas</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan Pembayaran</th>
                <th>Tahun Bayar</th>
                <th>Jumlah Pembayaran</th>
	

            </tr>

       
			<?php 
				$no=1;

				$bulanbayar=0;
				$jumlahbayar=0; 

				$data_bulan_nama = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

				foreach($pembayaran as $p){
					for ($i=0; $i < $p['bulan_bayar']; $i++) { 
						$nama_bulan = $data_bulan_nama[$i];
					} ?>
			<tr>
				<td class="td"><?php echo $no++ ?></td>
				<td class="td"><?php echo $p['nama_petugas'] ?></td>
				<td class="td"><?php echo $p['nis'] ?></td>
				<td class="td"><?php echo $p['nama'] ?></td>
				<td class="td"><?php echo $p['tgl_bayar'] ?></td>
                <td class="td"><?php echo $nama_bulan; ?></td>
				<td class="td"><?php echo 'Tahun Ke '.$p['tahun_bayar'] ?></td>				
				<td class="td"><?php echo 'Rp.'.$p['jumlah_bayar'].';' ?></td>
				
			</tr>
            
            <?php 
				$bulanbayar = $bulanbayar+$p['bulan_bayar'];
				$jumlahbayar = $jumlahbayar+$p['jumlah_bayar'];
			} ?>
            
			<tr class="tr">
				<th colspan="7" >Total:</th>
				<th colspan="2"><?php echo 'Rp.'.$jumlahbayar.';'; ?></th>
			</tr>
		</table>
		<P><?= date("d F Y. h:i:s A") ?></P>
	</section>
</body></html>