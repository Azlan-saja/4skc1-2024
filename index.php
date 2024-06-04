<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Belajar PHP </title>
        <!-- Icon -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body>

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">4SKC1 </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Master
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="index.php?page=mahasiswa">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Mahasiswa</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Dosen</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Mata Kuliah</span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-heading">
                    Proses
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Nilai</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>KRS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>KHS</span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-heading">
                    Laporan
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Cetak Nilai</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Cetak KRS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Cetak KHS</span></a>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->

                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-heading">
                    Info
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="info.php" target="_blank">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Status PHP </span></a>
                </li>

                <hr class="sidebar-divider d-none d-md-block mb-0 mt-3">
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Log Out</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block ">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

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

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>


                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->



                    <?php
                if (!isset($_GET['page'])) {
                    include "home.php";
                } else {
                    include $_GET['page'] . ".php";
                }
                ?>


                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; 4SKC1</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>

        <!-- Javascript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/sb-admin-2.min.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        </script>
    </body>

</html>