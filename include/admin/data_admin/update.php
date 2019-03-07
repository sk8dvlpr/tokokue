<?php
    include "../../config/database.php";

    // Set Data
    $id         = trim(mysqli_real_escape_string($conn, $_POST['ubahId']));
    $nama       = trim(mysqli_real_escape_string($conn, strtolower($_POST['ubahNama'])));
    $email      = trim(mysqli_real_escape_string($conn, strtolower($_POST['ubahEmail'])));
    $username   = trim(mysqli_real_escape_string($conn, $_POST['ubahUsername']));

    mysqli_query($conn, "UPDATE ms_admin SET nama = '$nama', email = '$email', username = '$username' WHERE id_admin = '$id'") or die(mysqli_error($conn));
?>