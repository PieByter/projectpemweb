<?php
 include "../koneksi.php";
$query = mysqli_query($connection, "UPDATE jabatan SET nama_jabatan='$_POST[nama]' WHERE id_jabatan='$_POST[id]' ");
if ($query) {
    echo '<script type ="text/JavaScript">alert("Data berhasil diupdate!")</script>';
    echo "<meta http-equiv='refresh' content='1;url=jabatan.php'>";
} else {
    echo '<script type ="text/JavaScript">alert("Tidak dapat mengupdate data!")</script>';
    echo mysqli_error($connection);
}