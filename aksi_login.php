<?php
session_start();
include "koneksi.php";
//tangkap data yang dikirim dari form login
$username = $_POST["username"];
$password = $_POST["password"];

//kueri data dari database
$query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query); //melakukan query

//mengecek apakah username dan password ada di database
if ($cek == TRUE) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:index_logout.php");
}
else {
    echo "<script> alert('Username atau Password Salah'); window.location = 'index.php'; </script>";
}