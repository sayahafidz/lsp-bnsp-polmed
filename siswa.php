<div class="container-fluid px-4">
    <h1 class="mt-4">Data Siswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Siswa</li>
    </ol>
    <a href="index.php?page=form_siswa" class="btn btn-primary">Tambah Data</a>

    <?php

    //proses query untuk menampilkan data siswa
    $table = 'siswa';
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="card mb-4 animate__animated  animate__bounce">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Siswa
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row["nama_siswa"]; ?></td>
                                <td><?php echo $row["nis"]; ?></td>
                                <td><?php echo $row["kelas"]; ?></td>
                                <td><?php echo $row["jenis_kelamin"]; ?></td>
                                <td><?php echo $row["tempat_tanggal_lahir"]; ?></td>
                                <td><?php echo $row["alamat"]; ?></td>
                                <td><?php echo $row["no_hp"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><a href="index.php?id=<?php echo $row["id"]; ?>&table=siswa&page=form_siswa" class="btn btn-warning">Edit</a> | <a href="delete_data.php?id=<?php echo $row["id"]; ?>&table=<?= $table ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data siswa ini?')">Hapus</a></td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "Tidak ada data siswa.";
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>