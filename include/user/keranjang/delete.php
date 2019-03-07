<?php
    include "../../config/database.php";

    $id_transaksi = trim(mysqli_real_escape_string($conn, $_POST['id']));

    mysqli_query($conn, "UPDATE ms_transaksi SET status_batal = '1' WHERE id_transaksi = '$id_transaksi'") or die(mysqli_error($conn));
?>