<?php 
  include '../koneksi.php';
  
  $foto = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  $tipefile = $_FILES['foto']['type'];
  $ukuranfile = $_FILES['foto']['size'];

  $error = "";
  if($foto == "") {
    $query = mysqli_query($connection, "UPDATE pekerja SET 
      nama = '$_POST[nama]',
      umur = '$_POST[umur]',
      jenis_kelamin = '$_POST[jk]',
      tanggal_lahir = '$_POST[tanggal]',
      jabatan = '$_POST[jabatan]',
      keterangan = '$_POST[keterangan]' WHERE id_pekerja = '$_POST[id]'");
  }
  else {
    if($tipefile != "image/jpeg" AND $tipefile != "image/jpg" AND $tipefile != "image/png") {
      $error = "Tipe file tidak didukung!";
    }
    else if ($ukuranfile > 1000000) {
      echo $ukuranfile;
      $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    }
    else {
      $query = mysqli_query($connection, "SELECT * FROM pekerja WHERE id_pekerja = '$_POST[id]'");
      $data = mysqli_fetch_array($query);
      if (file_exists("../images/$data[foto]"))
        unlink("../images/$data[foto]");
      move_uploaded_file($lokasi, "../images/".$foto);
      $query = mysqli_query($connection, "UPDATE pekerja SET 
        foto = '$foto',
        nama = '$_POST[nama]',
        umur = '$_POST[umur]',
        jenis_kelamin = '$_POST[jk]',
        tanggal_lahir = '$_POST[tanggal]',
        jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]' WHERE id_pekerja = '$_POST[id]'");
    }
  }

  if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=pekerja_edit.php&id=$_POST[id]'>";
  }
  else if ($query) {
    echo '<script type ="text/JavaScript">alert("Data berhasil disimpan!")</script>';
    echo "<meta http-equiv='refresh' content='2;url=pekerja.php'>";
  }
  else {
    echo '<script type ="text/JavaScript">alert("Tidak dapat menyimpan data!")</script>';
    echo mysqli_error($connection);
  }