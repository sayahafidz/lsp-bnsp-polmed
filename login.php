<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- menggunakan library css animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center animate__animated  animate__bounce">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" placeholder="nama@email.com" />
                                            <label>Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="password anda" />
                                            <label>Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" value="Login" name="login" class="btn btn-primary form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Daftar?</a></div>
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
//proses login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    //cek apakah email dan password cocok dengan data di tabel user
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $hasil = mysqli_fetch_assoc($result);
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $hasil['nama'];

    if (mysqli_num_rows($result) == 1) {
        //jika cocok, maka redirect ke halaman index
        header("Location: index.php?page=siswa");
    } else {
        //jika tidak cocok, maka tampilkan pesan error
        echo "<script type='text/javascript'>alert('Email atau password salah!');</script>";
    }
}
?>