<?php
  session_start();

  if (isset($_SESSION['login_user_status'])) {
    echo "<script>window.location = 'index';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Pendaftaran</title>
    <!-- Meta Library -->
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheet -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/plugin/sweetalert/dist/sweetalert2.min.css" type="text/css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid my-bg">
        <div class="social-media text-right pr-3">
          <small class="pr-4">Kontak : 0838 - 2779 - 6622</small>
          <small>Social Media :</small>
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="row">
          <div class="col-lg-8">
              <img class="navbar-logo" src="assets/images/logo.png" alt="Logo">
          </div>
        </div>
    </div>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light my-bg shadows">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./"><i class="fas fa-home"></i> Beranda</a>
            </li>
          </ul>
        </div>
        <form id="formPencarian" class="form-inline">
          <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search">
          <button class="btn btn-sm btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Cari</button>
        </form>
      </div>
    </nav>

    <!-- Content -->
    <div class="container">
      <h4 class="my-4 text-orange"><i class="fas fa-user-plus"></i> PENDAFTARAN</h4>
      <hr>

      <div id="alert"></div>

      <form id="formPendaftaranUser" class="needs-validation" action="" method="post" novalidate>
        <div class="form-group">
          <label for="daftarNama">Nama Lengkap :</label>
          <input type="text" class="form-control" name="daftarNama" id="daftarNama" placeholder="Masukkan nama lengkap" required>
          <div class="invalid-feedback">
            Harap masukkan nama lengkap terlebih dahulu.
          </div>
        </div>
        <div class="form-group">
          <label for="daftarAlamat">Alamat Lengkap :</label>
          <textarea class="form-control" name="daftarAlamat" id="daftarAlamat" cols="30" rows="5" placeholder="Masukkan alamat lengkap" required></textarea>
          <div class="invalid-feedback">
            Harap masukkan alamat terlebih dahulu.
          </div>
        </div>
        <div class="form-group">
          <label for="daftarEmail">Email Address :</label>
          <input type="email" class="form-control" name="daftarEmail" id="daftarEmail" placeholder="Masukkan email" required>
          <div class="invalid-feedback">
            Harap masukkan email terlebih dahulu.
          </div>
        </div>
        <div class="form-group">
          <label for="daftarPassword">Kata Sandi :</label>
          <input type="password" class="form-control" name="daftarPassword" id="daftarPassword" placeholder="Masukkan password" required>
          <div class="invalid-feedback">
            Harap masukkan password terlebih dahulu.
          </div>
        </div>

        <div class="form-group">
            <small class="form-text text-muted">Sudah Memiliki Akun? <a href="" data-toggle="modal" data-target="#modalLogin"> Login Sekarang!</a></small>
        </div>

        <div class="form-group">
          <button type="button" id="btnDaftar" class="btn text-white my-orange">Daftar</button>
        </div>
      </form>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form id="formLoginUser" class="needs-validation" action="" method="POST" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <label for="loginEmail">Email Address : </label>
                <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="Masukkan email" required>
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
            </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="button" id="btnLogin" class="btn text-white my-orange"><i class="fas fa-sign-in-alt"></i> Login Sekarang</button>
            </div>
          </form>  
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="my-bg mt-3 py-2 text-center">
      <small>Copyright 2018 by Kelompok Pemrograman Web 1</small>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/bs-form-validator.js" type="text/javascript"></script>
    <script src="assets/plugin/sweetalert/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $(document).on('click', '#btnDaftar', function () {
          $.ajax({
            url: 'include/user/pendaftaran',
            type: $('#formPendaftaranUser').attr('method'),
            data: $('#formPendaftaranUser').serialize(),
            success: function (data) {
              if (data == 1) {
                swal('Berhasil', 'Anda berhasil mendaftar', 'success');
                setTimeout(function(){ window.location = 'index' }, 1500);
              } else {
                swal('Perhatian', 'Email sudah digunakan', 'warning');
              }
            }
          })
        });

        $(document).on('click', '#btnLogin', function () {
          $.ajax({
            url: 'include/user/login',
            type: $('#formLoginUser').attr('method'),
            data: $('#formLoginUser').serialize(),
            success: function (data) {
              if (data == 'user_berhasil') {
                swal('Berhasil', 'Berhasil login', 'success');  
                setTimeout(function(){ window.location = 'page/user/dashboard' }, 1500);
              } else if (data == 'user_gagal') {
                swal('Gagal', 'Email atau Password yang anda masukkan salah', 'error');  
              } else {
                swal('Gagal', 'Akun Anda sedang dalam status non-aktif', 'error');
              }
            }
          });
        });
      });
    </script>
</body>
</html>