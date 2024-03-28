<?php
session_start();
include '../koneksi.php';

// Periksa apakah pengguna memiliki izin untuk menghapus data (misalnya, cek rolenya)
// if ($_SESSION['role'] != "1") {
//     die("Anda tidak memiliki izin untuk menghapus data pengguna");
// }

if (isset($_GET['id'])) {
    $id_user = $_GET['id'];

    // Lakukan pengecekan apakah ID pengguna valid dan dapat dihapus
    $query = "SELECT * FROM user WHERE id_user = $id_user";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Data ditemukan, lakukan proses penghapusan
        $delete_query = "DELETE FROM user WHERE id_user = $id_user";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil, arahkan kembali ke halaman data pengguna dengan pesan sukses
            header("Location: pengguna.php?pesan=deleted");
        } else {
            // Jika gagal menghapus, tampilkan pesan error
            header("Location: pengguna.php?pesan=deletegagal");
        }
    } else {
        // ID pengguna tidak valid atau tidak ditemukan
        header("Location: pengguna.php?pesan=penggunaTidakDitemukan");
    }
} else {
    // ID pengguna tidak diberikan
    header("Location: pengguna.php?pesan=IDPenggunaTidakDiberikan");
}
?>
