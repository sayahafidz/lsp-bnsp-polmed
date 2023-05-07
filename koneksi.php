<?php
session_start();
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "lsp_sekolah");

//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
