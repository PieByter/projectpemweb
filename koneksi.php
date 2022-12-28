<?php
 // bagian yang diganti nantinya saat menghosting secara online
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "projectpw";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed :" . mysqli_connect_error());
}
?>