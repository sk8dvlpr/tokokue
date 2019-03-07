<?php
    include "../../config/database.php";
    require "../../libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    $uuid4 = Uuid::uuid4();

    // Set data
    $id_admin       = $uuid4->toString();
    $nama           = trim(mysqli_real_escape_string($conn, strtolower($_POST['tambahNama'])));
    $email          = trim(mysqli_real_escape_string($conn, strtolower($_POST['tambahEmail'])));
    $username       = trim(mysqli_real_escape_string($conn, $_POST['tambahUsername']));
    $password       = sha1(trim(mysqli_real_escape_string($conn, $_POST['tambahPassword'])));
    $status_aktif   = 1;
    $status_hapus   = 1;

    $query = "INSERT INTO ms_admin (id_admin, nama, email, username, password, status_aktif, status_hapus) VALUES ('$id_admin','$nama','$email','$username','$password','$status_aktif','$status_hapus')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
?>