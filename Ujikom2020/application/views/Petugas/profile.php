<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->session->userdata("nama_petugas");?></title>
</head>
<body>
    <h1 >Halo <?php echo $this->session->userdata("nama_petugas");?> Anda adalah seorang petugas</h1>
    <a href="<?= site_url('Login/logout')?>">logout</a>
</body>
</html>