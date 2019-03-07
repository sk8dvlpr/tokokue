<?php
    include "../../config/database.php";

    $result = mysqli_query($conn, "SELECT * FROM ms_admin WHERE status_hapus != 0") or die(mysqli_error($conn));

    $i = 1;
    if (mysqli_num_rows($result) == 0) {
      echo "<p class='text-center text-muted'>Data admin tidak tersedia.</p>";
    } else {
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ucwords($row['nama']) . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            if ($row['status_aktif'] == 1) {
                echo "<td><span class='badge badge-success'>Aktif</span></td>";
            } else {
                echo "<td><span class='badge badge-warning'>Tidak Aktif</span></td>";
            }
            echo "  <td width='300'>
                        <button type='button' class='btn btn-sm btn-success my-1 btnUbah' data-ubahid='".$row['id_admin']."' data-toggle='modal' data-target='#ubahAdmin'><i class='fas fa-edit'></i> Edit</button>
                        <button type='button' class='btn btn-sm btn-warning my-1 btnStatus' data-statusid='".$row['id_admin']."' data-status='".$row['status_aktif']."'><i class='fas fa-ban'></i> Non-aktif</button>
                        <button type='button' class='btn btn-sm btn-danger my-1 btnHapus' data-hapus='".$row['id_admin']."'><i class='fas fa-trash'></i> Hapus</button>
                    </td>";
        echo "</tr>";
        $i++;
      }
    }    
?>