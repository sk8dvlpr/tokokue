<?php
    session_start();
    include "../config/database.php";

    $result = mysqli_query($conn, "SELECT id_kue, nama, foto, harga, DATE(created_date) as created_date FROM ms_kue WHERE status_hapus != 0 AND status_kue != 0 ORDER BY created_date DESC") or die(mysqli_error($conn));

    echo "<div class='row m-0'>";
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='col-lg-3 col-6 mb-3'>";
        echo "<div class='card'>";
          echo "<div class='card-header text-white my-orange'>".ucwords($row['nama'])."</div>";
          echo "<div class='card-body p-1'>";
            echo "<img src='".$row['foto']."' alt='".$row['nama']."' width='100%'>";
            echo "<div class='px-1 py-2'>";
              echo "<h5 class='card-name'>".ucwords($row['nama'])."</h5>";
              echo "<p class='card-price mb-2'>Rp. ".number_format($row['harga'], 0, ',', '.')."</p>";
              if (isset($_SESSION['login_user_status'])) {
                echo "<button type='button' class='btn btn-sm btn-block text-white my-orange btnPesan' data-userid='".$_SESSION['login_user_id']."' data-kueid='". $row['id_kue'] ."'>Pesan Sekarang</button>";
              } else {
                echo "<button type='button' class='btn btn-sm btn-block text-white my-orange' data-toggle='modal' data-target='#modalLogin'>Pesan Sekarang</button>";
              }
            echo "</div>";
          echo "</div>";
          echo "<div class='card-footer'>";
            echo "<small>Ditambahkan pada ".$row['created_date']."</small>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    }
    echo "</div>";
?>
