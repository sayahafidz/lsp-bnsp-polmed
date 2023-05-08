<?php
session_start();
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "lsp_sekolah");

//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


function addUpdateGuru($conn)
{
    if (isset($_POST['Submit'])) {
        // ambil data dari form
        $id = $_POST['id'];
        $nama_guru = $_POST['namaguru'];
        $nip = $_POST['nip'];
        $mata_pelajaran = $_POST['mapel'];
        $jenis_kelamin = $_POST['jk'];
        $tempat_tanggal_lahir = $_POST['ttl'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['nohp'];
        $pendidikan_terakhir = $_POST['pendidikan'];
        $status = $_POST['status'];

        // Check if we need to add or edit a record
        if (empty($id)) {
            // Add new record
            $sql = "INSERT INTO guru (nama_guru, nip, mata_pelajaran, jenis_kelamin, tempat_tanggal_lahir, alamat, no_hp, pendidikan_terakhir, status) VALUES ('$nama_guru', '$nip', '$mata_pelajaran', '$jenis_kelamin', '$tempat_tanggal_lahir', '$alamat', '$no_hp', '$pendidikan_terakhir', '$status')";
        } else {
            // query update data guru
            $sql = "UPDATE guru SET nama_guru='$nama_guru', nip='$nip', mata_pelajaran='$mata_pelajaran', jenis_kelamin='$jenis_kelamin', tempat_tanggal_lahir='$tempat_tanggal_lahir', alamat='$alamat', no_hp='$no_hp', pendidikan_terakhir='$pendidikan_terakhir', status='$status' WHERE id='$id'";
        }

        if (mysqli_query($conn, $sql)) {
            if (empty($id)) {
                echo "<script type='text/javascript'>alert('Data guru berhasil ditambahkan');</script>";
            } else {

                echo "<script type='text/javascript'>alert('Data guru berhasil diupdate');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Edit data guru gagal.');</script>";
        }
    }
}

//proses edit data siswa
function addUpdateSiswa($conn)
{
    if (isset($_POST["Submit"])) {
        $id = $_POST["id"];
        $nama_siswa = $_POST["namasiswa"];
        $nis = $_POST["nis"];
        $kelas = $_POST["kelas"];
        $jenis_kelamin = $_POST["jk"];
        $tempat_tanggal_lahir = $_POST["ttl"];
        $alamat = $_POST["alamat"];
        $no_hp = $_POST["nohp"];
        $status = $_POST["status"];

        // Check if we need to add or edit a record
        if (empty($id)) {
            // Add new record
            $sql = "INSERT INTO siswa (nama_siswa, nis, kelas, jenis_kelamin, tempat_tanggal_lahir, alamat, no_hp, status) VALUES ('$nama_siswa', '$nis', '$kelas', '$jenis_kelamin', '$tempat_tanggal_lahir', '$alamat', '$no_hp', '$status')";
        } else {

            $sql = "UPDATE siswa SET nama_siswa='$nama_siswa', nis='$nis', kelas='$kelas', jenis_kelamin='$jenis_kelamin', tempat_tanggal_lahir='$tempat_tanggal_lahir', alamat='$alamat', no_hp='$no_hp', status='$status' WHERE id=$id";
        }

        if (mysqli_query($conn, $sql)) {
            if (empty($id)) {
                echo "<script type='text/javascript'>alert('Data siswa berhasil ditambahkan');</script>";
            } else {

                echo "<script type='text/javascript'>alert('Data siswa berhasil diupdate');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Edit data siswa gagal.');</script>";
        }
    }
}
