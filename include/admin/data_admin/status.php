<?php
    include "../../config/database.php";

    $id     = trim(mysqli_real_escape_string($conn, $_POST['id']));
    $status = trim(mysqli_real_escape_string($conn, $_POST['status']));

    if ($status == 1) {
        mysqli_query($conn, "UPDATE ms_admin SET status_aktif = '0' WHERE id_admin = '$id'") or die(mysqli_error($conn));
    } else {
        mysqli_query($conn, "UPDATE ms_admin SET status_aktif = '1' WHERE id_admin = '$id'") or die(mysqli_error($conn));
    }
?>