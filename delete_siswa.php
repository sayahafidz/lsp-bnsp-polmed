<?php
//koneksi ke database
require_once("koneksi.php");
//proses hapus data siswa
$id = $_GET["id"];
$query = "DELETE FROM siswa WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: index.php"); //redirect ke halaman tampil siswa
} else {
    echo "Hapus data siswa gagal.";
}
