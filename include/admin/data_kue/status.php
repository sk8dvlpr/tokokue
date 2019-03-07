<?php
    include "../../config/database.php";

    $id     = trim(mysqli_real_escape_string($conn, $_POST['id']));
    $status = trim(mysqli_real_escape_string($conn, $_POST['status']));

    if ($status == 1) {
        mysqli_query($conn, "UPDATE ms_kue SET status_kue = '0' WHERE id_kue = '$id'") or die(mysqli_error($conn));
    } else {
        mysqli_query($conn, "UPDATE ms_kue SET status_kue = '1' WHERE id_kue = '$id'") or die(mysqli_error($conn));
    }
?>