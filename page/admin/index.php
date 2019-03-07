<?php
  session_start();

  if (isset($_SESSION['login_admin_status'])) {
    echo "<script>window.location = 'dashboard';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Login Admin</title>
    <!-- Meta Library -->
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheet -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="../../assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../assets/plugin/sweetalert/dist/sweetalert2.min.css">
</head>
<body style="background: url('../../assets/images/bg-login.jpg'); background-size: 250px">
    
    <div class="container">
      <div class="card col-lg-4 col-12 offset-lg-4 my-5 shadows">
        <div class="card-body">
          <h1 class="text-center"><i class="fas fa-user"></i></h1>
          <h4 class="text-center">ADMIN</h4>
          <form id="formLoginAdmin" class="needs-validation my-3" action="" method="POST" novalidate>
            <div class="form-group">
              <label for="loginUsername">Email Address : </label>
              <input type="text" class="form-control" name="loginUsername" id="loginUsername" placeholder="Masukkan username" required>
              <div class="invalid-feedback">
                Harap masukkan email terlebih dahulu.
              </div>
            </div>
            <div class="form-group">
              <label for="loginPassword">Kata Sandi : </label>
              <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Masukkan password" required>
              <div class="invalid-feedback">
                Harap masukkan password terlebih dahulu.
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-block text-white my-orange"><i class="fas fa-sign-in-alt"></i> Login Sekarang</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bs-form-validator.js" type="text/javascript"></script>
    <script src="../../assets/plugin/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(document).on('submit', '#formLoginAdmin', function () {
          $.ajax({
            url: '../../include/admin/login.php',
            type: $('#formLoginAdmin').attr('method'),
            data: $('#formLoginAdmin').serialize(),
            success: function (data) {
              if (data == 0) {
                swal('Gagal', 'Maaf Username Atau Password Salah', 'error');
              } else {
                swal('Berhasil', 'Berhasil Login', 'success');
                window.location = 'dashboard';
              }
            }
          });
        });
      });
    </script>
</body>
</html>