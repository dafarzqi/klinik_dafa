    <?php
    session_start();
    include '../koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id']; // Dapatkan ID obat dari URL atau form tergantung pada bagaimana Anda mengirimkannya.
        $nama = $_POST['nama']; // Dapatkan ID obat dari URL atau form tergantung pada bagaimana Anda mengirimkannya.
        $username = $_POST['username'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        $query = "UPDATE user SET nama='$nama', username='$username', alamat='$alamat', password='$password' WHERE id_user=$id";

        if (mysqli_query($koneksi, $query)) {
            header("Location: user.php?pesan=edited");
        } else {
            header("Location: user.php?pesan=editgagal");
        }
    } else {
        header("Location: user.php?pesan=editgagal");
    }
    ?>
