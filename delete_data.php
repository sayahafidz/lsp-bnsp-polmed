<?php
//koneksi ke database
require_once("koneksi.php");
//proses hapus data guru
$id = $_GET["id"];
$table = $_GET["table"];
$query = "DELETE FROM $table WHERE id=$id";
($table == 'siswa') ? $table = 'index' : $table = $table;
$result = mysqli_query($conn, $query);


if ($result) {
    header("location: $table.php"); //redirect ke halaman tampil guru
} else {
    echo "Hapus data gagal.";
}
