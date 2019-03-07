<?php
  include "../config/database.php";
  require "../libs/vendor/autoload.php";

  use Ramsey\Uuid\Uuid;
  use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  $uuid4 = Uuid::uuid4();

  $id_transaksi       = $uuid4->toString();
  $id_user            = trim(mysqli_real_escape_string($conn, $_POST['id_user']));
  $id_kue             = trim(mysqli_real_escape_string($conn, $_POST['id_kue']));
  $tanggal_pesanan    = date("Y-m-d h:i:s");
  $status_keranjang   = 1;
  $status_deal        = 0;
  $status_pemesanan   = 0;
  $status_pengiriman  = 0;
  $status_batal       = 0;

  $query1 = "INSERT INTO ms_transaksi (id_transaksi, id_user, id_kue, tanggal_pesanan, status_keranjang, status_deal, status_pemesanan, status_pengiriman, status_batal) VALUES ('$id_transaksi', '$id_user', '$id_kue', '$tanggal_pesanan', '$status_keranjang', '$status_deal', '$status_pemesanan', '$status_pengiriman', '$status_batal')";
  $query2 = "SELECT * FROM ms_transaksi WHERE id_user = '$id_user' AND id_kue = '$id_kue' AND status_batal = 0";
  $result = mysqli_query($conn, $query2);

  if (mysqli_num_rows($result)) {
    echo FALSE;
  } else {
    mysqli_query($conn, $query1) or die(mysqli_error($conn));
    echo TRUE;
  }
?>