<?php
  // Config
  $db_Server   = "localhost";
  $db_Username = "root";
  $db_Password = "";
  $db_Name     = "db_toko_kue";

  $conn = mysqli_connect($db_Server, $db_Username, $db_Password, $db_Name);

  if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
  }
?>