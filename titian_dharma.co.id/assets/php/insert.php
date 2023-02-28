<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_lengkap = $_POST['nama_lengkap'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$tes_psikologi = $_POST['tes_psikologi'];
$training = $_POST['training'];
$workshop = $_POST['workshop'];
 
// menginput data ke database
mysqli_query($conn,"insert into tb_konsultasi values('','$nama_lengkap','$tanggal_lahir','$jenis_kelamin','$nomor_telepon','$email','$alamat','$tes_psikologi','$training','$workshop')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../konsultasi.php?pesan=berhasil");
 
?>