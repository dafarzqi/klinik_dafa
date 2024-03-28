<?php
session_start();

include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id_pasien = $_POST['id_pasien'];
    $id_petugas = $_POST['id_petugas'];
    $tanggal = $_POST['Tanggal'];
    $id_obat = $_POST['id_obat'];
    $pembelian = $_POST['Pembelian'];

    // Query untuk memasukkan data baru ke dalam database
    $query = "INSERT INTO transaksi_obat (id_pasien, id_petugas, tanggal, id_obat, pembelian) 
              VALUES ('$id_pasien', '$id_petugas', '$tanggal', '$id_obat', '$pembelian')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika berhasil ditambahkan, alihkan kembali ke halaman data transaksi obat
        header("Location: transaksi_obat.php");
    } else {
        // Jika terdapat kesalahan, tampilkan pesan kesalahan
        echo "Gagal menambahkan data transaksi obat: " . mysqli_error($koneksi);
    }
} else {
    // Jika bukan metode POST, kembalikan ke halaman sebelumnya
    header("Location: transaksi_obat.php");
}
?>
