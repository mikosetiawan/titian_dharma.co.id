<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en" id="dashboard">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logoTD.png">
    <title>Dashboard | Titian Dharma.co.id</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- ICON bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- GOOGLE ICON -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <header class="navbar sticky-top navbar-dark navbar-expand-lg main-nav">
        <div class="container">
            <a class="navbar-brand page-scroll" href="index.html">
                <img src="assets/img/TD003.png" class="main-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto py-2">
                    <a class="nav-link active px-3 page-scroll" aria-current="page" href="#dashboard">Dashboard</a>
                    <a class="nav-link px-3 page-scroll" aria-current="page" href="assets/php/logout.php" onclick="return confirm('Apakah yakin mau keluar?');">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <!-- PESAN ERROR -->
    <?php if (isset($_GET['pesan'])) { ?>
        <?php if ($_GET['pesan'] == "berhasil") { ?>
            <div class="alert alert-primary" role="alert">
            <i class="bi bi-shield-fill-check"> Selamat Datang! Admin, berhasil Login!</i>
            </div>
            <?php }elseif ($_GET['pesan'] == "hapus") { ?>
            <div class="alert alert-warning" role="alert">
                Berhasil Menghapus Data File
            </div>
            <?php }elseif ($_GET['pesan'] == "gagalhapus") { ?>
            <div class="alert alert-danger" role="alert">
                    Gagal Menghapus Data File
            </div>
        <?php } ?>
    <?php } ?>
    <section>
        <div class="container py-5 px-3 shadow">
            <h2>Table Data</h2>
            <p>Daftar customer konsultasi psikologi</p>
            <hr>
            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tes Psikologi</th>
                            <th scope="col">Paket Training</th>
                            <th scope="col">Paket Workshop dan Seminar</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'assets/php/koneksi.php';
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM tb_konsultasi ORDER BY idKonsultasi DESC");
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $row['nama_lengkap']; ?></td>
                                <td><?php echo $row['tanggal_lahir']; ?></td>
                                <td><?php echo $row['jenis_kelamin']; ?></td>
                                <td><?php echo $row['nomor_telepon']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['tes_psikologi']; ?></td>
                                <td><?php echo $row['training']; ?></td>
                                <td><?php echo $row['workshop']; ?></td>
                                <td><a href="assets/php/delete.php?id=<?php echo $row['idKonsultasi'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin file akan dihapus?');">Hapus</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>