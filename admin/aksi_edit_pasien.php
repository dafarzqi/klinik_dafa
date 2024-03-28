<?php
session_start();
include_once("../koneksi.php");

// Cek apakah user sudah login
// if (!isset($_SESSION['nama'])) {
//     header('Location: ../index.php'); // Jika belum login, arahkan kembali ke halaman login
//     exit; // Hentikan eksekusi script
// }

// if ($_SESSION['rule'] != "1") {
//     die("Anda bukan admin"); // Jika bukan admin, tampilkan pesan kesalahan
// }

// Ambil data dari formulir edit pasien
$id_user = $_POST['id_user'];
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$bpjs = $_POST['bpjs'];

// Check if a photo is uploaded
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    // Specify the location to store the photo
    $upload_dir = "../../assets/images/medic"; // Change to the appropriate directory path

    // Get information about the uploaded photo
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

    // Move the photo to the specified directory
    if (move_uploaded_file($foto_tmp, $upload_dir . $foto_name)) {
        // If the upload is successful, update the 'foto' field in the 'users' table
        $query = "UPDATE user SET nama = '$nama', alamat = '$alamat' WHERE id_user = $id_user";
    } else {
        die("Gagal mengunggah foto.");
    }
} else {
    // If no photo is uploaded, use the default image
     // Set the default image file name
    $query = "UPDATE user SET nama = '$nama', alamat = '$alamat' WHERE id_user = $id_user";
}

// Update fields in the 'pasien' table
$foto_name = "foto.jpg";
$queryPasien = "UPDATE pasien SET id_user = '$id_user', bpjs = '$bpjs', foto = '$foto_name' WHERE id_pasien = $id_pasien";

// Execute the 'users' table update query
$resultUsers = mysqli_query($koneksi, $query);

// Execute the 'pasien' table update query
$resultPasien = mysqli_query($koneksi, $queryPasien);

if ($resultUsers && $resultPasien) {
    // Redirect to the pasien data page after successfully updating
    header('Location: pasien.php');
} else {
    echo "Gagal memperbarui data pasien. " . mysqli_error($koneksi);
}

?>