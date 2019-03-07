<?php
    include "../../config/database.php";

    $result = mysqli_query($conn, "SELECT * FROM ms_user WHERE status_hapus != '0'") or die(mysqli_error($conn));

    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama_lengkap']) . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['tanggal_daftar'] . "</td>";
            if ($row['status_user'] == 1) {
                echo "<td><span class='badge badge-success'>Aktif</span></td>";
            } else {
                echo "<td><span class='badge badge-warning'>Tidak Aktif</span></td>";
            }
            echo "  <td width='200'>
                        <button type='button' class='btn btn-sm btn-warning btnStatus' data-statusid='".$row['id_user']."' data-status='".$row['status_user']."'><i class='fas fa-ban'></i> Non-aktif</button>
                        <button type='button' class='btn btn-sm btn-danger my-1 btnHapus' data-hapusid='".$row['id_user']."'><i class='fas fa-trash'></i> Hapus</button>
                    </td>";
        echo "</tr>";
        $i++;
    }

    
?>