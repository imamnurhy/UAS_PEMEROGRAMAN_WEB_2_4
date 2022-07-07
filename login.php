<?php
require_once "config/database.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
} else {
    header("location:dashboard.php");
}
