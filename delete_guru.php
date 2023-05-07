<?php
//koneksi ke database
require_once("koneksi.php");
//proses hapus data guru
$id = $_GET["id"];
$query = "DELETE FROM guru WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: guru.php"); //redirect ke halaman tampil guru
} else {
    echo "Hapus data guru gagal.";
}
