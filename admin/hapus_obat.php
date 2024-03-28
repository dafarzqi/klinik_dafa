<?php
session_start();
include '../koneksi.php';

// Periksa apakah pengguna memiliki izin untuk menghapus data (misalnya, cek rolenya)
if ($_SESSION['role'] != "1") {
    die("Anda tidak memiliki izin untuk menghapus data obat");
}

if (isset($_GET['id'])) {
    $id_obat = $_GET['id'];

    // Lakukan pengecekan apakah ID obat valid dan dapat dihapus
    $query = "SELECT * FROM obat WHERE id_obat = $id_obat";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Data ditemukan, lakukan proses penghapusan
        $delete_query = "DELETE FROM obat WHERE id_obat = $id_obat";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil, arahkan kembali ke halaman data obat dengan pesan sukses
            header("Location: obat.php?pesan=deleted");
        } else {
            // Jika gagal menghapus, tampilkan pesan error
            header("Location: obat.php?pesan=deletegagal");
        }
    } else {
        // ID obat tidak valid atau tidak ditemukan
        header("Location: obat.php?pesan=obatTidakDitemukan");
    }
} else {
    // ID obat tidak diberikan
    header("Location: obat.php?pesan=IDObatTidakDiberikan");
}
?>
