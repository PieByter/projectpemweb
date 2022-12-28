<?php
 include "../koneksi.php";
if (file_exists("../images/$_GET[foto]"))
    unlink("../images/$_GET[foto]");

$query = mysqli_query($connection, "DELETE FROM pekerja WHERE id_pekerja='$_GET[id]'");

if ($query) {
    echo '<script type ="text/JavaScript">alert("Data Berhasil Dihapus!")</script>';
    echo "<meta http-equiv='refresh' content='1;url=pekerja.php'>";
} else {
    echo '<script type ="text/JavaScript">alert("Tidak Dapat Menghapus Data!")</script>';
    echo mysqli_error($connection);
}