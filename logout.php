<?php
//mulai session
session_start();

//hancurkan session
session_destroy();

//redirect ke halaman login
// header("Location: login.php");
echo "<script type='text/javascript'>alert('Berhasil Logout');</script>";
echo "<script>window.location.href='login.php';</script>";
exit;
