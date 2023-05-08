<div class="container-fluid px-4">
    <h1 class="mt-4">Data Guru</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Guru</li>
    </ol>
    <a href="index.php?page=form_guru" class="btn btn-primary">Tambah Data</a>
    <div class="card mb-4 animate__animated  animate__bounce">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Guru
        </div>
        <?php
        require_once "koneksi.php";
        $table = 'guru';
        //proses query untuk menampilkan data guru
        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Mapel</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Pendidikan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Mapel</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Pendidikan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['nama_guru']; ?></td>
                            <td><?php echo $row['nip']; ?></td>
                            <td><?php echo $row['mata_pelajaran']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['tempat_tanggal_lahir']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['no_hp']; ?></td>
                            <td><?php echo $row['pendidikan_terakhir']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <a href="index.php?id=<?php echo $row['id']; ?>&table=guru&page=form_guru" class="btn btn-warning">Edit</a> |
                                <a href="delete_data.php?id=<?php echo $row['id']; ?>&table=<?= $table ?> " onclick="return confirm('Anda yakin ingin menghapus data guru ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>