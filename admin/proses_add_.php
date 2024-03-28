<?php
session_start();
include "../koneksi.php"; // Assuming this file contains your database connection code
// ...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $rule = $_POST['rule'];

    // Add server-side validation here if needed
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $query = "INSERT INTO user (username, password, nama, alamat, rule) VALUES ('$username', '$password', '$nama', '$alamat','$rule')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Get the last inserted user ID
            $user_id = mysqli_insert_id($koneksi);

            if ($role == 4) {
                // If the role is 'Pasien', insert data into the 'pasien' table
                $bpjs = $_POST['bpjs'];

                $query = "INSERT INTO pasien (id_user, bpjs) VALUES ('$user_id', '$bpjs')";
                $result = mysqli_query($koneksi, $query);

            } elseif ($role == 2) {
                // If the role is 'Apoteker', insert data into the 'apoteker' table
                $query = "INSERT INTO apoteker (id_user) VALUES ('$user_id')";
                $result = mysqli_query($koneksi, $query);
            }

            if ($result) {
                header("location: pengguna.php?pesan=success");
            } else {
                header("location: add_user?pesan=gagal");
            }
        } else {
            header("location: add_user?pesan=gagal");
        }
    } else {
    // Handle GET requests or direct access to this file
    header("location: add_user.php"); // Redirect to the registration page
}
// ...
?>