<?php
    include "../../config/database.php";

    $id     = trim(mysqli_real_escape_string($conn, $_POST['id']));
    $status = trim(mysqli_real_escape_string($conn, $_POST['status']));

    if ($status == 1) {
        mysqli_query($conn, "UPDATE ms_user SET status_user = '0' WHERE id_user = '$id'") or die(mysqli_error($conn));
    } else {
        mysqli_query($conn, "UPDATE ms_user SET status_user = '1' WHERE id_user = '$id'") or die(mysqli_error($conn));
    }
?>