<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
while ($d = mysqli_fetch_array($data)){$ids=$d['id_user'];$role=$d['rule'];$nama=$d['nama'];
		}
if($cek > 0){
	$_SESSION['ids'] = $ids;
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = $role;
	if($role == 1){
	header("location:admin/index.php");}
	else if ($role == 2) {
	header("location:dokter/index.php");}
	else if ($role == 3) {
	header("location:apoteker/index.php");}
	else { header("location:pasien/index.php");}
}else{
	header("location:index.php?pesan=gagal");
}
?>