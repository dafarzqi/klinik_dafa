<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $rule = $_POST ['rule'];

    // $foto = $_FILES['foto']['name'];
    // $tmp = $_FILES['foto']['tmp_name'];
    // $path = "assets/images/"; // Ubah ke lokasi folder penyimpanan foto sesuai kebutuhan

    // if (move_uploaded_file($tmp, $path . $foto)) {
        // Melakukan pernyataan pertama untuk memasukkan data ke dalam tabel user
        $query1 = "INSERT INTO user (id_user, username, password, nama, alamat, rule) VALUES ('$id_user','$username','$password','$nama', '$alamat','$rule')";
        $result1 = mysqli_query($koneksi, $query1);

        if ($result1) {
            // Jika pernyataan pertama berhasil, ambil ID yang baru saja dimasukkan
            
                // Kedua pernyataan berhasil dieksekusi
                header("location: pengguna.php");
        } else {
            // Jika pernyataan pertama gagal
            echo "Gagal menyimpan data di tabel pengguna: " . mysqli_error($koneksi);
        }

    // }

    mysqli_close($koneksi);
}