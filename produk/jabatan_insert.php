<?php
 include "../koneksi.php";
$query = mysqli_query($connection, "INSERT INTO jabatan SET id_jabatan='$_POST[id_jabatan]', nama_jabatan = '$_POST[nama]' ");

if ($query) {
    echo '<script type ="text/JavaScript">alert("Data berhasil disimpan!")</script>';
    echo "<meta http-equiv='refresh' content='1;url=jabatan.php'>";
} else {
    echo '<script type ="text/JavaScript">alert("Tidak dapat menyimpan data")</script>';
    echo mysqli_error($connection);
}