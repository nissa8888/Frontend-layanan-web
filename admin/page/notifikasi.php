<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}
require '../../db/koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Notifikasi</title>

    <!-- Fonts & Styles -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <li class="nav-item">
            <a class="nav-link" href="produk.php">
                <i class="fas fa-code"></i><span>Produk</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="notifikasi.php">
                <i class="fas fa-bell"></i><span>Notifikasi</span>
            </a>
        </li>
    </ul>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow"></nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Notifikasi Pembelian</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Notifikasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Waktu Dibuat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM notifikasi ORDER BY id DESC");
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= htmlspecialchars($data['nama_pelanggan']); ?></td>
                                            <td><?= htmlspecialchars($data['produk']); ?></td>
                                            <td><?= $data['jumlah']; ?></td>
                                            <td><?= $data['waktu_dibuat']; ?></td>
                                            <td>
                                                <?= ($data['status'] == 'baru') ? '<span class="badge badge-warning">Belum Terbaca</span>' : '<span class="badge badge-success">Terbaca</span>'; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto text-center">
                <span>&copy; KELOMPOK 3 UNPAM - 2024</span>
            </div>
        </footer>
    </div>
</div>

<!-- JS Files -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/sb-admin-2.min.js"></script>
<script src="../js/demo/datatables-demo.js"></script>

</body>
</html>
