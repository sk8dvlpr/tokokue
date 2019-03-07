<?php
  include "../config/database.php";

  $id = trim(mysqli_real_escape_string($conn, $_POST['id']));

  $query = "SELECT * FROM ms_transaksi WHERE id_user = '$id' AND status_batal != 1 AND status_deal != 1";
  $reslut = mysqli_query($conn, $query);

  if (mysqli_num_rows($reslut)) {
    echo mysqli_num_rows($reslut);
  } else {
    echo 0;
  }
?>