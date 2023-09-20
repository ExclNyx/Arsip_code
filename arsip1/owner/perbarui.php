<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
 
// menginput data ke database
mysqli_query($conn,"UPDATE siswa set nim='$nim',nama='$nama',telp='$telp',email='$email',jurusan='$jurusan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>


