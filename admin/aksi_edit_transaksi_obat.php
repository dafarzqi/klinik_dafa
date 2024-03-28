<?php
session_start();

include '../koneksi.php';

if (isset($_POST['id_transaksi'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_pasien = $_POST['id_pasien'];
    $id_petugas = $_POST['id_petugas'];
    $tanggal = $_POST['tanggal'];
    $id_obat = $_POST['id_obat'];
    $pembelian = $_POST['pembelian'];

    // Update data transaksi obat
    $query = "UPDATE transaksi_obat SET id_pasien = '$id_pasien', id_petugas = '$id_petugas', tanggal = '$tanggal', id_obat = '$id_obat', pembelian = '$pembelian' WHERE id_transaksi = $id_transaksi";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika berhasil diubah, alihkan kembali ke halaman data transaksi obat
        header("Location: transaksi_obat.php");
    } else {
        // Jika terdapat kesalahan, tampilkan pesan kesalahan
        echo "Gagal mengubah data transaksi obat: " . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada data yang diterima, kembalikan ke halaman sebelumnya
    header("Location: transaksi_obat.php");
}

?>
