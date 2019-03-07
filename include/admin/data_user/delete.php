<?php
    include "../../config/database.php";

    $id_user = trim(mysqli_real_escape_string($conn, $_POST['id']));

    mysqli_query($conn, "UPDATE ms_user SET status_hapus = '0' WHERE id_user = '$id_user'") or die(mysqli_error($conn));
?>