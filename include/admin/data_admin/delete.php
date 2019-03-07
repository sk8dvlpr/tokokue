<?php
    include "../../config/database.php";

    $id_admin = trim(mysqli_real_escape_string($conn, $_POST['id']));

    mysqli_query($conn, "UPDATE ms_admin SET status_hapus = '0' WHERE id_admin = '$id_admin'") or die(mysqli_error($conn));
?>