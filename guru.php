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
                    <h1 class="mt-4">Data Guru</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Data Guru</li>
                    </ol>
                    <a href="tambah_guru.php" class="btn btn-primary">Tambah Data</a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Guru
                        </div>
                        <?php
                        require_once("koneksi.php");
                        //proses query untuk menampilkan data guru
                        $query = "SELECT * FROM guru";
                        $result = mysqli_query($conn, $query);
                        ?>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>NIP</th>
                                        <th>Mapel</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Tgl Lahir</th>
                                        <th>Alamat</th>
                                        <th>No hp</th>
                                        <th>Pendidikan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>NIP</th>
                                        <th>Mapel</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Tgl Lahir</th>
                                        <th>Alamat</th>
                                        <th>No hp</th>
                                        <th>Pendidikan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['nama_guru']; ?></td>
                                            <td><?php echo $row['nip']; ?></td>
                                            <td><?php echo $row['mata_pelajaran']; ?></td>
                                            <td><?php echo $row['jenis_kelamin']; ?></td>
                                            <td><?php echo $row['tempat_tanggal_lahir']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><?php echo $row['no_hp']; ?></td>
                                            <td><?php echo $row['pendidikan_terakhir']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td>
                                                <a href="edit_guru.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a> |
                                                <a href="delete_guru.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data guru ini?')" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
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