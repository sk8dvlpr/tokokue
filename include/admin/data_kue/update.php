<?php
    include "../../config/database.php";

    // Set Data
    $id         = trim(mysqli_real_escape_string($conn, $_POST['ubahId']));
    $nama       = trim(mysqli_real_escape_string($conn, strtolower($_POST['ubahNama'])));
    $kategori   = trim(mysqli_real_escape_string($conn, strtolower($_POST['ubahKategori'])));
    $harga      = trim(mysqli_real_escape_string($conn, $_POST['ubahHarga']));
    $keterangan = trim(mysqli_real_escape_string($conn, $_POST['ubahKeterangan']));

    mysqli_query($conn, "UPDATE ms_kue SET nama = '$nama', kategori = '$kategori', harga = '$harga', keterangan = '$keterangan' WHERE id_kue = '$id'") or die(mysqli_error($conn));
?>