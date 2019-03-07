<?php
  include "../../config/database.php";
  require "../../libs/vendor/autoload.php";

  use Ramsey\Uuid\Uuid;
  use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  $uuid4 = Uuid::uuid4();

  $valid_ext = array('jpeg', 'jpg', 'png');
  $path = "../../../assets/images/cake/";
  $final_path = "http://localhost/toko-kue/assets/images/cake/";

  if (!empty($_POST['tambahNama']) || !empty($_POST['tambahKategori']) || !empty($_POST['tambahHarga']) || !empty($_POST['tambahKeterangan']) || $_FILES['tambahFoto']) {
      $img = $_FILES['tambahFoto']['name'];
      $tmp = $_FILES['tambahFoto']['tmp_name'];

      $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

      $final_image = rand(1000, 1000000)."-".$img;

      if (in_array($ext, $valid_ext)) {
          $path = $path.strtolower($final_image);

          if (move_uploaded_file($tmp, $path)) {
              echo "<img src='$path' />";
              $id           = $uuid4->toString();
              $nama         = trim(mysqli_real_escape_string($conn, $_POST['tambahNama']));
              $kategori     = trim(mysqli_real_escape_string($conn, $_POST['tambahKategori']));
              $harga        = trim(mysqli_real_escape_string($conn, $_POST['tambahHarga']));
              $keterangan   = trim(mysqli_real_escape_string($conn, $_POST['tambahKeterangan']));
              $foto         = $final_path.$final_image;
              $status_kue   = 1;
              $status_hapus = 1;
              $created_date = date("Y-m-d h:i:s");

              mysqli_query($conn, "INSERT INTO ms_kue (id_kue, nama, kategori, harga, keterangan, foto, status_kue, status_hapus, created_date) VALUES ('$id', '$nama', '$kategori', '$harga', '$keterangan', '$foto', '$status_kue', '$status_hapus', '$created_date')");
          }
      } else {
          echo "invalid";
      }
  }
?>