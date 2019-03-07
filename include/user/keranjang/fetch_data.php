<?php
    session_start();
    include "../../config/database.php";

    $id_user = $_SESSION['login_user_id'];

    $query = "SELECT id_transaksi, ms_kue.nama AS nama_kue, tanggal_pesanan, ms_kue.harga AS harga FROM (ms_transaksi INNER JOIN ms_kue on ms_transaksi.id_kue = ms_kue.id_kue) WHERE status_batal != 1 AND status_deal != 1 AND id_user = '$id_user'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $i = 1;
    if (mysqli_num_rows($result) == 0) {
      echo "<p class='text-center text-muted'>Data admin tidak tersedia.</p>";
    } else {
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama_kue']) . "</td>";
            echo "<td>" . $row['tanggal_pesanan'] . "</td>";
            echo "<td> Rp." . number_format($row['harga'], 0, ',', '.') ."</td>";
            echo "  <td width='200'>
                        <button type='button' class='btn btn-sm btn-success my-1 btnPesan' data-pesan='".$row['id_transaksi']."'><i class='fas fa-check'></i> Pesan</button>
                        <button type='button' class='btn btn-sm btn-danger my-1 btnHapus' data-hapus='".$row['id_transaksi']."'><i class='fas fa-trash'></i> Batal</button>
                    </td>";
        echo "</tr>";
        $i++;
      }
    }    
?>