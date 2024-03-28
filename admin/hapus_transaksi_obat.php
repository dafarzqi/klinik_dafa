<?php
// Pastikan Anda telah memulai session sebelum menggunakan session pada script ini
session_start();

// Lakukan pengecekan apakah user sudah login atau belum, jika belum, arahkan ke halaman login
if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}

// Lakukan pengecekan apakah parameter ID transaksi diterima melalui request GET
if (isset($_GET['id'])) {
    // Sisipkan file koneksi ke database
    include '../koneksi.php';

    // Lakukan sanitasi terhadap ID transaksi yang diterima dari parameter GET
    $id_transaksi = mysqli_real_escape_string($koneksi, $_GET['id']);

    // Lakukan query DELETE untuk menghapus data transaksi obat
    $query = "DELETE FROM transaksi_obat WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman data transaksi obat
        header("Location: transaksi_obat.php");
    } else {
        // Jika terjadi kesalahan dalam penghapusan, tampilkan pesan error
        echo "Gagal menghapus data transaksi obat: " . mysqli_error($koneksi);
    }
} else {
    // Jika parameter ID transaksi tidak ditemukan, arahkan ke halaman data transaksi obat
    header("Location: transaksi_obat.php");
}
?>
