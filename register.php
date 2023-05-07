<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Daftar</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Daftar Akun</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="text" name="nama" placeholder="nama" />
                                                    <label>Nama</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="text" name="email" placeholder="email" />
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="password" name="password" placeholder="password" />
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input type="submit" class="btn btn-primary btn-block" name="register" value="Daftar Akun">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

<?php
require_once("koneksi.php");
//proses registrasi
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //cek apakah email sudah terdaftar di tabel user
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        //jika email belum terdaftar, maka simpan data ke tabel user
        $query = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            //jika penyimpanan data sukses, maka tampilkan pesan sukses dan redirect ke halaman login
            echo "<script type='text/javascript'>alert('Registrasi sukses! Silakan login <a href='login.php'>di sini</a>');</script>";
        } else {
            //jika penyimpanan data gagal, maka tampilkan pesan error
            echo "<script type='text/javascript'>alert('Registrasi gagal! Silakan coba lagi.');</script>";
        }
    } else {
        //jika email sudah terdaftar, maka tampilkan pesan error
        echo "<script type='text/javascript'>alert('Email sudah terdaftar! Silakan gunakan email lain.');</script>";
    }
}
?>