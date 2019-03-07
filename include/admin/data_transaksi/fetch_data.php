<?php
    include "../../config/database.php";

    $query = "SELECT id_transaksi, ms_user.nama_lengkap AS nama_pemesan, ms_kue.nama AS nama_kue, ms_user.alamat AS alamat_user, status_pemesanan, status_pengiriman FROM ((ms_transaksi INNER JOIN ms_kue on ms_transaksi.id_kue = ms_kue.id_kue) INNER JOIN ms_user ON ms_transaksi.id_user = ms_user.id_user) WHERE status_deal = 1";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama_pemesan']) . "</td>";
            echo "<td>" . ucwords($row['nama_kue']) . "</td>";
            echo "<td>" . $row['alamat_user'] . "</td>";
            if ($row['status_pemesanan'] == 1) {
              echo "<td><span class='badge badge-success'>Diterima</span></td>";
            } else {
              echo "<td><span class='badge badge-warning'>Pending</span></td>";
            }
            if ($row['status_pengiriman'] == 1) {
              echo "<td><span class='badge badge-success'>Dikirim</span></td>";
            } else {
              echo "<td><span class='badge badge-warning'>Pending</span></td>";
            }
            echo "  <td width='200'>
                        <button type='button' class='btn btn-sm btn-success my-1 btnTerima' data-terima='".$row['id_transaksi']."'><i class='fas fa-check'></i> Terima</button>
                        <button type='button' class='btn btn-sm btn-primary my-1 btnKirim' data-kirim='".$row['id_transaksi']."'><i class='fas fa-check'></i> Kirim</button>
                    </td>";
        echo "</tr>";
        $i++;
    }

    
?>