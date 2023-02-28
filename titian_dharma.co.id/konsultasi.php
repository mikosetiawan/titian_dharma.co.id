<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logoTD.png">
    <title>KONSULTASI JASA | Titian Dharma.co.id</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <div id="main-konsultasi" class="container py-2">
        <div class="row py-5">
            <!-- PESAN ALERT -->
            <?php if (isset($_GET['pesan'])) { ?>
                    <?php if ($_GET['pesan'] == "berhasil") { ?>
                        <div class="alert alert-primary" role="alert">
                            Registrasi berhasil! | Beberapa saat lagi akan dihubungi admin!
                        </div>
                    <?php }elseif ($_GET['pesan'] == "gagal") { ?>
                        <div class="alert alert-danger" role="alert">
                            Gagal Registrasi, Silahkan coba lagi!
                        </div>
                    <?php } ?>
                <?php } ?>
            <div class="col-lg-6 px-5 shadow">
                <img src="assets/img/logoTD.png" class="main-logo rounded mx-auto d-block py-3" alt="">
                <form method="post" action="assets/php/insert.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Lengkap*</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan nama lengkap.."
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label" required="">Tanggal Lahir*</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputState" required="">Jenis Kelamin*</label>
                        <select id="inputState" name="jenis_kelamin" class="form-control">
                            <option selected>- Pilih -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label" required="">Nomor Telepon*</label>
                        <input type="number" class="form-control" name="nomor_telepon" placeholder="+62">
                        <small id="emailHelp" class="form-text text-muted">Status Nomor Aktif bisa akses whatsapp dan
                            Telepon</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan alamat email..">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat Lengkap*</label>
                        <textarea name="alamat" class="form-control" required=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputState">Tes Psikologi</label>
                        <select id="inputState" name="tes_psikologi" class="form-control">
                            <option selected>-Pilih-</option>
                            <option value="PAUD | Rp.75.000,-/Orang">PAUD | Rp.75.000,-/Orang</option>
                            <option value="TK | Rp.75.000,-/Orang">TK | Rp.75.000,-/Orang</option>
                            <option value="SD | Rp.75.000,-/Orang">SD | Rp.75.000,-/Orang</option>
                            <option value="SLTP | Rp.75.000,-/Orang">SLTP | Rp.75.000,-/Orang</option>
                            <option value="SMA | Rp.75.000,-/Orang">SMA | Rp.75.000,-/Orang</option>
                            <option value="AKADEMIK/PERGURUAN TINGGI | Rp.75.000,-/Orang">AKADEMIK/PERGURUAN TINGGI |
                                Rp.75.000,-/Orang</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputState">Training dan Pengembangan diri Siswa</label>
                        <select id="inputState" name="training" class="form-control">
                            <option selected>- Pilih -</option>
                            <option value="PAKET Rp.1.000.000 | Max.40 ORANG">PAKET Rp.1.000.000 | Max.40 ORANG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputState">Seminar dan Workshop</label>
                        <select id="inputState" name="workshop" class="form-control">
                            <option selected>- Pilih -</option>
                            <option value="Rp. 50.000,-/Orang">Rp. 50.000,-/Orang</option>
                        </select>
                    </div>
                    <div class="mb-3 d-grid gap-2 py-3">
                        <button type="submit" class="btn-oren-btn"> KONSULTASI SEKARANG</button>
                        <a href="index.html" class="btn-ungu">KEMBALI</a>
                        <hr>
                        <a href="login.php" class="btn btn-secondary" style="font-weight:600;">LOGIN</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 py-3 px-2 main-color px-5 text-center shadow">
                <img src="assets/img/bgLogin3.png" alt="" class="main-image rounded mx-auto d-block py-3">
                <h1 class="form-label py-2 color-text main-judul">Selamat datang!</h1>
                <h3 class="py-2 text-white">Kami siap melayani</h3>
                <p class="text-white py-5">" Sejalan dengan namanya bersama meniti kehidupan untuk melakukan kebaikan
                    melalui
                    pelayanan psikologi memenuhi kebutuhan masyarakat akan layanan jasa psikologi."</p>
                <p class="text-white main-judul font-bold">Sosial Media kami</p>
                <a href="#facebook"><img src="assets/img/facebook.svg" class="size-icon px-1"></a>
                <a href="#email"><img src="assets/img/email.svg" class="size-icon px-1"></a>
                <a href="#instagram"><img src="assets/img/instagram.svg" class="size-icon px-1"></a>

            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>