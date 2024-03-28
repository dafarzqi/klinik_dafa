<?php
session_start();
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_obat = $_POST['id_obat']; // Dapatkan ID obat dari URL atau form tergantung pada bagaimana Anda mengirimkannya.
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kedaluwarsa = $_POST['kedaluwarsa'];

    $query = "UPDATE obat SET nama_obat='$nama_obat', harga='$harga', stok='$stok', expired='$kedaluwarsa' WHERE id_obat=$id_obat";

    if (mysqli_query($koneksi, $query)) {
        header("Location: obat.php?pesan=edited");
    } else {
        header("Location: obat.php?pesan=editgagal");
    }
} else {
    header("Location: obat.php?pesan=editgagal");
}
?>
