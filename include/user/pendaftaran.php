<?php
  include "../config/database.php";
  require "../libs/vendor/autoload.php";

  use Ramsey\Uuid\Uuid;
  use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  $uuid4 = Uuid::uuid4();

  // Set data
  $id_user        = $uuid4->toString();
  $nama           = trim(mysqli_real_escape_string($conn, $_POST['daftarNama']));
  $alamat         = trim(mysqli_real_escape_string($conn, $_POST['daftarAlamat']));
  $email          = trim(mysqli_real_escape_string($conn, $_POST['daftarEmail']));
  $password       = sha1(trim(mysqli_real_escape_string($conn, $_POST['daftarPassword'])));
  $tanggal_daftar = date("Y-m-d h:i:s");
  $status_user    = 1;
  $status_hapus   = 1;

  $query1 = "INSERT INTO ms_user (id_user, nama_lengkap, alamat, email, password, tanggal_daftar, status_user, status_hapus) VALUES ('$id_user', '$nama', '$alamat', '$email', '$password', '$tanggal_daftar', '$status_user', '$status_hapus')";
  $query2 = "SELECT * FROM ms_user WHERE email = '$email'";
  
  $result = mysqli_query($conn, $query2) or die(mysqli_error($conn));
  $getRow = mysqli_num_rows($result);
  
  if ($getRow <= 0) {
    mysqli_query($conn, $query1) or die(mysqli_error($conn));
    echo TRUE;
  } else {
    echo FALSE;
  }
?>