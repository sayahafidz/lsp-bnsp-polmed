<?php
require_once("koneksi.php");


$sql = "SELECT * from guru";
if ($result = mysqli_query($conn, $sql)) {
    // Return the number of rows in result set
    $jumlah_guru = mysqli_num_rows($result);
}

$sql = "SELECT * from siswa";
if ($result = mysqli_query($conn, $sql)) {
    // Return the number of rows in result set
    $jumlah_siswa = mysqli_num_rows($result);
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-md-6 animate__animated animate__bounceInDown">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <center>
                        <h1><?= $jumlah_guru; ?></h1>
                    </center>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center">
                    Total Data Guru
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 animate__animated animate__bounceInDown">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <center>
                        <h1><?= $jumlah_siswa; ?></h1>
                    </center>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center">
                    Total Data Siswa
                </div>
            </div>
        </div>
    </div>
</div>