<!DOCTYPE html>
<html>
<head>
    <title>Grafik Data dari Database</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <?php
    // Ambil data dari database (contoh menggunakan mysqli)
    // Anda perlu mengganti ini dengan koneksi database dan query yang sesuai dengan struktur tabel Anda
    include 'koneksi.php' 'localhost' 'root' 'klinik'; // Sertakan file koneksi ke database

    $query = "SELECT id_transaksi, id_pasien FROM tabel_grafik"; // Ganti nama_kolom dan nilai_kolom sesuai dengan struktur tabel Anda
    $result = mysqli_query($koneksi, $query);

    $labels = [];
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['id_transaksi']; // Simpan label untuk grafik
        $data[] = $row['id_pasien']; // Simpan nilai untuk grafik
    }
    ?>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Grafik Dari Database',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
