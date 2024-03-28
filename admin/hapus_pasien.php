<?php
session_start();
include '../koneksi.php';

// Periksa apakah pengguna memiliki izin untuk menghapus data (misalnya, cek rolenya)
if ($_SESSION['role'] != "1") {
    die("Anda tidak memiliki izin untuk menghapus data pasien");
}

if (isset($_GET['id'])) {
    $id_pasien = $_GET['id'];

    // Lakukan pengecekan apakah ID pasien valid dan dapat dihapus
    $query = "SELECT * FROM pasien WHERE id_pasien = $id_pasien";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Data ditemukan, lakukan proses penghapusan
        $delete_query = "DELETE FROM pasien WHERE id_pasien = $id_pasien";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil, arahkan kembali ke halaman data pasien dengan pesan sukses
            header("Location: pasien.php?pesan=deleted");
        } else {
            // Jika gagal menghapus, tampilkan pesan error
            header("Location: pasien.php?pesan=deletegagal");
        }
    } else {
        // ID pasien tidak valid atau tidak ditemukan
        header("Location: pasien.php?pesan=pasienTidakDitemukan");
    }
} else {
    // ID pasien tidak diberikan
    header("Location: pasien.php?pesan=IDPasienTidakDiberikan");
}
?>
