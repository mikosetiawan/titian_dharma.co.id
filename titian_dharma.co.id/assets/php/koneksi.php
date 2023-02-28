<?php 
$conn = mysqli_connect("localhost","root","","db_titian_dharma");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>