<?php
    include "../../config/database.php";

    $id = trim(mysqli_real_escape_string($conn, $_POST['id']));

    $result = mysqli_query($conn, "SELECT * FROM ms_kue WHERE id_kue = '$id'") or die(mysqli_error($conn));

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>