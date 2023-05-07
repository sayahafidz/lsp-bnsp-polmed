<?php
//mulai session
session_start();

//hancurkan session
session_destroy();

//redirect ke halaman login
header("Location: login.php");
exit;
