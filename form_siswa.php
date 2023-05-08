<?php
require_once("koneksi.php");
//proses edit data siswa
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

//proses ambil data siswa dari tabel
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM siswa WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Form Data Siswa</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Form Data Siswa
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namasiswa" value="<?php echo isset($data["nama_siswa"]) ? $data['nama_siswa'] : ''; ?>">
                        <input type="hidden" name="id" value="<?php echo isset($data["id"]) ? $data['id'] : ''; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nis" value="<?php echo isset($data["nis"]) ? $data['nis'] : ''; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" value="<?php echo isset($data["kelas"]) ? $data['kelas'] : ''; ?>">
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
                        <input type="text" class="form-control" name="ttl" value="<?php echo isset($data["tempat_tanggal_lahir"]) ? $data['tempat_tanggal_lahir'] : ''; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="<?php echo isset($data["alamat"]) ? $data['alamat'] : ''; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nohp" value="<?php echo isset($data["no_hp"]) ? $data['no_hp'] : ''; ?>">
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

                <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
                <a href="index.php" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>