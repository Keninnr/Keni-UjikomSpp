<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a href="<?= site_url('Login/profile')?>" class="navbar-brand"><?= $this->session->userdata("nama_petugas")?></a>
        <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_siswa')?>">Data Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Kelas')?>">Data Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_spp')?>">Data Spp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_petugas')?>">Data Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_pembayaran/data_pembayaran_spp')?>">Data Pembayaran</a>
            </li>
           
        </ul>

        
    </nav>
    

</body>
</html>