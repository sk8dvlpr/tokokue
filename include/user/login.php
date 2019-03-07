<?php
  session_start();
  include "../config/database.php";

  // Set data
  $email    = trim(mysqli_real_escape_string($conn, $_POST['loginEmail']));
  $password = sha1(trim(mysqli_real_escape_string($conn, $_POST['loginPassword'])));

  $query1 = "SELECT * FROM ms_user WHERE email = '$email' AND status_user != '0'";
  $result1 = mysqli_query($conn, $query1);

  $query2 = "SELECT * FROM ms_user WHERE email = '$email' AND password = '$password'";
  $result2 = mysqli_query($conn, $query2);

  if (mysqli_num_rows($result2)) {
    if (mysqli_num_rows($result1)) {
      while ($row = mysqli_fetch_array($result1)) {
        $_SESSION['login_user_status'] = TRUE;
        $_SESSION['login_user_id'] = $row['id_user'];
        echo "user_berhasil";
      }
    } else {
      echo "user_tidak_aktif";
    }
  } else {
    echo "user_gagal";
  }
?>