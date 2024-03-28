<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kedaluwarsa = $_POST['kedaluwarsa'];


    // if (move_uploaded_file($tmp, $path . $foto)) {
        // Melakukan pernyataan pertama untuk memasukkan data ke dalam tabel users
        $query1 = "INSERT INTO obat (id_obat, nama_obat, harga, stok, expired) VALUES ('', '$nama', '$harga', '$stok', '$kedaluwarsa')";

        $result1 = mysqli_query($koneksi, $query1);

        if ($result1) {
            // Jika pernyataan pertama berhasil, ambil ID yang baru saja dimasukkan
            
                header("location: obat.php");
        } else {
            // Jika pernyataan pertama gagal
            echo "Gagal menyimpan data di tabel obat: " . mysqli_error($koneksi);
        }

    // }

    mysqli_close($koneksi);
}