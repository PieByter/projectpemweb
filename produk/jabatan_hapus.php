<?php
 include "../koneksi.php";
$query = mysqli_query($connection, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]' ");
if ($query) {
    echo '<script type ="text/JavaScript">alert("Data berhasil dihapus!")</script>';
    echo "<meta http-equiv='refresh' content='1;url=jabatan.php'>";
} else {
    echo '<script type ="text/JavaScript">alert("Tidak dapat menghapus data!")</script>';
    echo mysqli_error($connection);
}