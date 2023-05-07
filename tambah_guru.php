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
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Dashboard Sekolah</a>
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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="guru.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Guru
                        </a>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Data Guru</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tambah Data Guru
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nama Guru</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namaguru">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nip</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nip">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Mapel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mapel">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="jk">
                                            <option selected>Pilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Tempat Tgl Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ttl">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">No Hp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nohp">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pendidikan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="status">
                                            <option selected>Pilih</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Tambah" name="tambah">
                                <a href="guru.php" class="btn btn-warning">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Annisa Aulia Sitorus</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
<?php
require_once("koneksi.php");
if (isset($_POST["tambah"])) {
    $nama_guru = $_POST["namaguru"];
    $nip = $_POST["nip"];
    $mata_pelajaran = $_POST["mapel"];
    $jenis_kelamin = $_POST["jk"];
    $tempat_tanggal_lahir = $_POST["ttl"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["nohp"];
    $pendidikan_terakhir = $_POST["pendidikan"];
    $status = $_POST["status"];
    $query = "INSERT INTO guru (nama_guru, nip, mata_pelajaran, jenis_kelamin, tempat_tanggal_lahir, alamat, no_hp, pendidikan_terakhir, status) 
              VALUES ('$nama_guru', '$nip', '$mata_pelajaran', '$jenis_kelamin', '$tempat_tanggal_lahir', '$alamat', '$no_hp', '$pendidikan_terakhir', '$status')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data guru berhasil disimpan!');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Tambah data guru gagal.');</script>";
    }
}
?>