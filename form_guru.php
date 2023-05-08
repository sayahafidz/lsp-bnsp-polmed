<div class="container-fluid px-4">
    <h1 class="mt-4">Form Data Guru</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Form Data Guru
        </div>

        <?php
        require_once('koneksi.php');
        addUpdateGuru($conn);

        // ambil data guru berdasarkan id
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM guru WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
        }
        ?>

        <div class="card-body">
            <form method="POST">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Guru</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namaguru" value="<?php echo  isset($data['nama_guru']) ? $data['nama_guru'] : '' ?>">
                        <input type="hidden" class="form-control" name="id" value="<?php echo  isset($data['id']) ? $data['id'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nip</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nip" value="<?php echo  isset($data['nip']) ? $data['nip'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Mapel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mapel" value="<?php echo  isset($data['mata_pelajaran']) ? $data['mata_pelajaran'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="jk">
                            <option selected>Pilih</option>
                            <option value="Laki-laki" <?php echo  isset($data['jenis_kelamin']) == "Laki-laki" ? "selected" : '' ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo  isset($data['jenis_kelamin']) == "Perempuan" ? "selected" : '' ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tempat Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ttl" value="<?php echo  isset($data['tempat_tanggal_lahir']) ? $data['tempat_tanggal_lahir'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="<?php echo  isset($data['alamat']) ? $data['alamat'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nohp" value="<?php echo  isset($data['no_hp']) ? $data['no_hp'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pendidikan" value="<?php echo  isset($data['pendidikan_terakhir']) ? $data['pendidikan_terakhir'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="status">
                            <option selected>Pilih</option>
                            <option value="Aktif" <?php echo  isset($data['status']) == "Aktif" ? "selected" : '' ?>>Aktif</option>
                            <option value="Tidak Aktif" <?php echo  isset($data['status']) == "Tidak Aktif" ? "selected" : '' ?>>Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
                <a href="index.php?page=guru" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>