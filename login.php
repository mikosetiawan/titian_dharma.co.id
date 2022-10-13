<?php

include 'assets/php/koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php?pesan=berhasil");
    } else {
        header("Location: login.php?pesan=perhatian");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logoTD.png">
    <title>LOGIN | Titian Dharma.co.id</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- ICON BOOSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS GOOGLE ICON -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <?php echo $_SESSION['error'] ?>
    <!-- PESAN ERROR -->
    <?php if (isset($_GET['pesan'])) { ?>
        <?php if ($_GET['pesan'] == "perhatian") { ?>
            <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"> Mohon maaf halaman ini tidak dapat diakses umum!</i>
            </div>
            <?php }elseif ($_GET['pesan'] == "berhasilkeluar") { ?>
            <div class="alert alert-primary" role="alert">
            <i class="bi bi-shield-lock"> Berhasil keluar! Tetap Hati-hati jangan berikan akun dan password anda!

            </i>
            </div>
        <?php } ?>
    <?php } ?>
    <section id="login" class="py-5">
        <div class="container py-4 px-4 shadow rounded w-50">
            <img src="assets/img/logoTD.png" class="w-25 position-absolute opacity-25 z-index-1">
            <h2>Login Admin</h2>
            <p>Titian Dharma.co.id</p>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <button name="submit" class="btn-oren">Login</button>
                            <!-- <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p> -->
                        </div>
                        <div class="form-floating">
                            <a href="konsultasi.php" class="btn btn-secondary" style="width:100%; font-weight:600;">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>