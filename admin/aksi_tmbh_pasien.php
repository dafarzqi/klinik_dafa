<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $bpjs = $_POST['bpjs'];
    $foto= $_POST['foto'];

    // $foto = $_FILES['foto']['name'];
    // $tmp = $_FILES['foto']['tmp_name'];
    // $path = "assets/images/"; // Ubah ke lokasi folder penyimpanan foto sesuai kebutuhan

    // if (move_uploaded_file($tmp, $path . $foto)) {
        // Melakukan pernyataan pertama untuk memasukkan data ke dalam tabel users
        $query1 = "INSERT INTO user (username, password, nama, alamat) VALUES ('$username', '$password','$nama','$alamat')";
        $result1 = mysqli_query($koneksi, $query1);

        if ($result1) {
            // Jika pernyataan pertama berhasil, ambil ID yang baru saja dimasukkan
            $id_user = mysqli_insert_id($koneksi);

            // Melakukan pernyataan kedua untuk memasukkan data ke dalam tabel pasien
            $query2 = "INSERT INTO pasien (id_user, bpjs) VALUES ($id_user, '$bpjs')";
            $result2 = mysqli_query($koneksi, $query2);

            if ($result2) {
                // Kedua pernyataan berhasil dieksekusi
                header("location: pasien.php");
            } else {
                // Jika pernyataan kedua gagal
                echo "Gagal menyimpan data di tabel pasien: " . mysqli_error($koneksi);
            }
        } else {
            // Jika pernyataan pertama gagal
            echo "Gagal menyimpan data di tabel users: " . mysqli_error($koneksi);
        }

    // }

    mysqli_close($koneksi);
}