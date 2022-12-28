<?php

if (isset($_POST['register'])) {
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $validasi = mysqli_query($connection,"SELECT * FROM user WHERE username = '$username'");
    
    if($validasi -> num_rows > 0){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Username Sudah Terdaftar Silahkan Ganti !!!")';  
        echo '</script>';
        echo "<script>window.history.back()</script>";        
    }
    else {
            $query  = mysqli_query($connection, "INSERT INTO user (username, password)VALUES ('$username', '$password')");
            if($query){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Register Berhasil")';  
            echo '</script>';
            echo "<script>window.location='index.php'</script>";
            }
            else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Register Gagal Silahkan Coba Lagi...")';  
            echo '</script>';
            echo "<script>window.history.back()</script>";
            }
    }
}
else
{
    echo "<script>window.history.back()</script>";
}