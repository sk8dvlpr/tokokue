<?php
    include "../../config/database.php";

    $id_kue = trim(mysqli_real_escape_string($conn, $_POST['id']));

    mysqli_query($conn, "UPDATE ms_kue SET status_hapus = '0' WHERE id_kue = '$id_kue'") or die(mysqli_error($conn));
?>