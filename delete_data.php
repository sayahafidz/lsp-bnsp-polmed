<?php
//koneksi ke database
require_once("koneksi.php");
//proses hapus data
$id = $_GET["id"];
$table = $_GET["table"];
$query = "DELETE FROM $table WHERE id=$id";
$result = mysqli_query($conn, $query);


if ($result) {
    header("location: index.php?page=$table"); //redirect ke halaman tampil data
} else {
    echo "Hapus data gagal.";
}
