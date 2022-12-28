<?php
include "../koneksi.php";
$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if ($foto == "") {
    $query = mysqli_query($connection, "INSERT INTO pekerja SET nama='$_POST[nama]',
    jenis_kelamin = '$_POST[jk]',
    umur = '$_POST[umur]',
    jabatan = '$_POST[jabatan]',
    tanggal_lahir = '$_POST[tanggal]',
    keterangan = '$_POST[keterangan]'");
} else {
    if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
        $error = "Tipe File Tidak Didukung!";
    } else if ($ukuranfile >= 1000000) {
        echo $ukuranfile;
        $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    } else {
        move_uploaded_file($lokasi, "../images/" . $foto);
        $query = mysqli_query($connection, "INSERT INTO pekerja SET
        foto = '$foto',
        nama = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        umur = '$_POST[umur]',
        tanggal_lahir = '$_POST[tanggal]',
        jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]'");
    }
}
if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=pekerja_tambah.php'>";
} else if ($query) {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data berhasil di simpan")';  
    echo '</script>';
    echo "<meta http-equiv='refresh' content='1;url=pekerja.php'>";
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Tidak dapat menyimpan data!")';  
    echo '</script>';
    echo mysqli_error($connection);
}