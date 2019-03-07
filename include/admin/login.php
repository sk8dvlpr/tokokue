<?php
  session_start();
  include "../config/database.php";

  // Get Data
  $username = trim(mysqli_real_escape_string($conn, $_POST['loginUsername']));
  $password = sha1(trim(mysqli_real_escape_string($conn, $_POST['loginPassword'])));

  $query = "SELECT * FROM ms_admin WHERE username = '$username' AND password = '$password' AND status_aktif != 0 AND status_hapus != 0";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)) {
    $_SESSION['login_admin_status'] = TRUE;
    echo TRUE;
  } else {
    echo FALSE;
  }
?>