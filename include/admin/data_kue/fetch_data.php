<?php
    include "../../config/database.php";

    $result = mysqli_query($conn, "SELECT id_kue, nama, kategori, harga, status_kue FROM ms_kue WHERE status_hapus != 0 ORDER BY created_date DESC") or die(mysqli_error($conn));

    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama']) . "</td>";
            echo "<td>" . ucwords($row['kategori']) . "</td>";
            echo "<td> Rp." . number_format($row['harga'], 0, ',', '.') . "</td>";
            if ($row['status_kue'] == 1) {
                echo "<td><span class='badge badge-success'>Tersedia</span></td>";
            } else {
                echo "<td><span class='badge badge-warning'>Tidak Tersedia</span></td>";
            }
            echo "  <td width='300'>
                        <button type='button' class='btn btn-sm btn-success my-1 btnUbah' data-ubahid='".$row['id_kue']."' data-toggle='modal' data-target='#ubahKue'><i class='fas fa-edit'></i> Edit</button>
                        <button type='button' class='btn btn-sm btn-warning my-1 btnStatus' data-statusid='".$row['id_kue']."' data-status='".$row['status_kue']."'><i class='fas fa-ban'></i> Non-aktif</button>
                        <button type='button' class='btn btn-sm btn-danger my-1 btnHapus' data-hapusid='".$row['id_kue']."'><i class='fas fa-trash'></i> Hapus</button>
                    </td>";
        echo "</tr>";
        $i++;
    }

    
?>