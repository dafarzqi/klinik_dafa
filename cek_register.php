<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$rpassword = $_POST['rpassword'];
$rule = $_POST['rule'];

if($password==$rpassword){
$data = mysqli_query($koneksi,"INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `rule`) VALUES ('', '$username', '$password', '$nama', '$alamat', '$rule');");
header("location:index.php?pesan=berhasil");
} else {
	header("location:daftar.php?pesan=gagal");
}
?>