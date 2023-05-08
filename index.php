<?php
require_once("koneksi.php");
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) { // Check if user is logged in
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>";
    echo "<script type='text/javascript'>window.location = 'login.php';</script>";
    // header('Location: login.php'); // Redirect to login page if user is not logged in
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- menggunakan library css animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 animate__animated animate__pulse animate__infinite" href="index.php?page=siswa">Dashboard Sekolah</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="index.php?page=siswa">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="index.php?page=guru">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Guru
                        </a>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $_SESSION['name']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php
                $page = $_GET['page'];
                if ($page == 'siswa') {
                    include('siswa.php');
                } elseif ($page == 'guru') {
                    include('guru.php');
                } elseif ($page == 'form_guru') {
                    include('form_guru.php');
                } elseif ($page == 'form_siswa') {
                    include('form_siswa.php');
                } else {
                    include('siswa.php');
                }
                ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <?php
                include('footer.php');
                ?>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>