<?php
    session_start();
    include "../../config/database.php";

    $id_user = $_SESSION['login_user_id'];

    $query = "SELECT id_transaksi, ms_kue.nama AS nama_kue, tanggal_pesanan, ms_kue.harga AS harga, status_pemesanan, status_pengiriman FROM (ms_transaksi INNER JOIN ms_kue on ms_transaksi.id_kue = ms_kue.id_kue) WHERE status_batal != 1 AND status_deal != 0 AND id_user = '$id_user'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $i = 1;
    if (mysqli_num_rows($result) == 0) {
      echo "<p class='text-center text-muted'>Data transaksi tidak tersedia.</p>";
    } else {
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama_kue']) . "</td>";
            echo "<td>" . $row['tanggal_pesanan'] . "</td>";
            echo "<td> Rp." . number_format($row['harga'], 0, ',', '.') ."</td>";
            if ($row['status_pemesanan'] == 1) {
              echo "<td><span class='badge badge-success'>Sudah Diterima</span></td>";
            } else {
              echo "<td><span class='badge badge-warning'>Pending</span></td>";
            }
            if ($row['status_pengiriman'] == 1) {
              echo "<td><span class='badge badge-success'>Sedang Dikirim</span></td>";
            } else {
              echo "<td><span class='badge badge-warning'>Pending</span></td>";
            }
        echo "</tr>";
        $i++;
      }
    }    
?>