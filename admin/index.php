<?php
session_start();
include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Klinik Dafa - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <style>
    .bg-pink {
        background-color: #A0C49D;
    }
</style>

<ul class="navbar-nav bg-pink sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-ninja"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik Dafa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Klinik
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="pasien.php">Data Pasien</a>
                        <a class="collapse-item" href="pengguna.php">Data Pengguna</a>
                        <a class="collapse-item" href="obat.php">Data Obat</a>
                        <a class="collapse-item" href="transaksi_obat.php">Data Transaksi Obat</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pasien</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            <style>
    .nav-item a.dropdown-item {
        background-color: red !important;
    }
</style>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="dropdown-item" href="../lo" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-wrench"></i>
        <span>LOG OUT</span>
    </a>
</li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?php echo $_SESSION['nama'] ?>!</span>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../img/profilkucing.jpg" style="width: 55px; height: 50px;" >
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../lo" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-black-800"  style="color: black;">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pasien Terdaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-black-800" style="color: black;">
                                                <?php
                                                include '../koneksi.php';
                                                $data1 = mysqli_query($koneksi,"select * from pasien");
                                                $cek1 = mysqli_num_rows($data1);
                                                echo $cek1;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-black-300" style="color: black;"   ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pasien Hari Ini/Ditangani</div>
                                            <div class="h5 mb-0 font-weight-bold text-black-800" style="color: black;">
                                                 <?php
                                                include '../koneksi.php';
                                                $data2 = mysqli_query($koneksi,"select * from antrian");
                                                $cek2 = mysqli_num_rows($data2);
                                                $data3 = mysqli_query($koneksi,"select * from antrian where status=1");
                                                $cek3 = mysqli_num_rows($data3);
                                                echo $cek2." / ". $cek3;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-black-300" style="color: black;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Obat/Stok
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" style="color: black;">
                                                        <?php
                                                        $data4 = mysqli_query($koneksi,"select * from obat");
                                                        $cek4 = mysqli_num_rows($data4);
                                                        echo $cek4;
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <?php
                                                        $data5 = mysqli_query($koneksi,"select * from obat where expired < now()");
                                                        $cek5 = mysqli_num_rows($data5);
                                                        $kadaluarsa=$cek5/($cek4*100);
                                                        echo $cek5."%";
                                                        ?>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-black-300" style="color: black;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pendapatan Hari Ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-black-800" style="color: black;">
                                            <?php 
                                            $jumlah = 0;
                                                    $data6 = mysqli_query($koneksi, "SELECT * FROM antrian WHERE status = 1 AND mendaftar = CURRENT_DATE;");
                                                    $cek6 = mysqli_num_rows($data6);
                                                    $pend1 = $cek6*50000;
                                      
                                                    $data7 = mysqli_query($koneksi, "SELECT obat.harga as a, transaksi_obat.pembelian as b FROM obat, transaksi_obat WHERE transaksi_obat.tanggal = CURRENT_DATE AND obat.id_obat = transaksi_obat.id_obat");
                                                    while ($d = mysqli_fetch_array($data7)){
                                                        $jumlah = $jumlah+($d['a']*$d['b']);
                                                    }
                                                    $pend_akhir = $pend1+$jumlah;
                                                    echo "Rp ".$pend_akhir;

                                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-black-300" style="color: black;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3> Total Pendapatan </h3>
                        <canvas id="myChart"></canvas>
                        <script>
                            <?php
                            include '../koneksi.php';
                            ?>
                            var ctx = document.getElementById("myChart").getContext('2d');
                            <?php
                            $data8 = mysqli_query($koneksi, "select id_obat,harga from obat");
                            $cek8 = mysqli_num_rows($data8);
                            $data9 = mysqli_query($koneksi, "select id_obat,pembelian,tanggal from transaksi_obat");
                            $cek9 = mysqli_num_rows($data9);
                            ?>
                            const dataObat = [
                                <?php
                                while ($d = mysqli_fetch_array($data8)) {
                                    echo '{ id: ' . $d['id_obat'] . ",harga:" . $d['harga'] . "},";
                                }
                                ?>
                            ];
                            const dataTransaksi = [
                                <?php
                                while ($d = mysqli_fetch_array($data9)) {
                                    echo '{ id: ' . $d['id_obat'] . ", pembelian : " . $d['pembelian'] .  ", tanggal : '" . $d['tanggal'] .  "'},";
                                }
                                ?>
                            ];
                            const sumArr = []
                            const dateArr = []
                            const sum = dataTransaksi.forEach(e => {
                                console.log(dataObat);
                                console.log(e);
                                const obat = dataObat.find(obat => obat.id === e.id) ?? 5000;
                                e.harga = obat.harga;
                                e.total = e.pembelian * e.harga;
                                sumArr.push(e.total);
                                dateArr.push(new Date(e.tanggal).toLocaleDateString());
                            })
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: dateArr,
                                    datasets: [{
                                        label: '',
                                        data: sumArr,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <!-- /.container-fluid -->

                
               

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Klinik Dafa 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>