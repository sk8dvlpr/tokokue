<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Beranda</title>
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
          <div class="col-lg-4">
            <div class="row py-4 pr-3 pl-3">
              <div class="col">
                <a href="page/user/keranjang" style="text-decoration: none;">
                  <div class="card text-white my-orange" style="height: 100%">
                    <div class="card-body py-2">
                      <div class="row">
                        <div class="col-2">
                          <h2 class="mt-2"><i class="fas fa-shopping-cart"></i></h2>
                        </div>
                        <div class="col">
                          <div class="row text-center">
                            <div class="col-12 pr-0"><h3 class="m-0"><span class="badge" id="cart"></span></h3></div>
                            <div class="col pr-0"><h6>KERANJANG</h6></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col">
                <?php if (!isset($_SESSION['login_user_status'])) { ?>
                  <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#modalLogin">
                    <div class="card text-white my-orange" style="height: 100%">
                      <div class="card-body py-2">
                        <div class="row p-1">
                          <div class="col-3">
                            <h2 class="mt-2"><i class="fas fa-sign-in-alt"></i></h2>
                          </div>
                          <div class="col">
                            <h5 class="mt-3 ml-3">LOGIN</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php } else { ?>
                  <a href="page/user/dashboard" style="text-decoration: none;">
                    <div class="card text-white my-orange" style="height: 100%">
                      <div class="card-body py-2">
                        <div class="row p-1">
                          <div class="col">
                            <h5 class="mt-3 ml-3">Dashboard</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php } ?>
              </div>
            </div>
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
              <a class="nav-link" href="#"><i class="fas fa-home"></i> Beranda</a>
            </li>
          </ul>
        </div>
        <form id="formPencarian" class="form-inline">
          <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search">
          <button class="btn btn-sm btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Cari</button>
        </form>
      </div>
    </nav>

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

              <div class="form-group">
                <small class="form-text text-muted">Belum Memiliki Akun? <a href="pendaftaran"> Daftar Sekarang!</a></small>
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

    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/slider1.jpg" alt="First slide" width="100%">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-shadows">Toko Kue Online Terbaik Yang Pernah Ada</h5>
            <p class="text-shadows">Belanja kue secara menjadi lebih aman dan mudah bersama kami.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="container">
      <h4 class="my-4 text-orange"><i class="fas fa-bookmark"></i> PRODUK BARU</h4>
      <hr>
      <div class="row">
        <div id="dataProduk"></div>
      </div>
    </div>

    <!-- Footer -->
    <div class="my-bg mt-3 py-2 text-center" style="border-top: 1px solid dimgray">
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
        function fetch_data() {
          $.ajax({
            url: 'include/kue/fetch_data',
            type: 'POST',
            success: function (data) {
              $("#dataProduk").html(data);
            }
          });
        }

        fetch_data();

        function fetch_cart() {
          var id = "<?php if(!isset($_SESSION['login_user_id'])){ echo 0;} else { echo $_SESSION['login_user_id'];}?>";
          
          $.ajax({
            url: 'include/user/fetch_cart',
            type: 'POST',
            data: {id:id},
            success: function (data) {
              $('#cart').text(data);
            }
          })
        }

        fetch_cart();

        $(document).on('click', '.btnPesan', function () {
          var id_user = $(this).data('userid');
          var id_kue = $(this).data('kueid');
          
          $.ajax({
            url: 'include/user/add_cart',
            type: 'POST',
            data: {id_user:id_user,id_kue:id_kue},
            success: function (data) {
              if (data == 0) {
                swal('Perhatian', 'Anda sudah memesan kue ini', 'warning');
              } else {
                swal('Berhasil', 'Pesanan berhasil ditambahkan ke keranjang', 'success');
                fetch_cart();
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
                setTimeout(function(){ window.location = './' }, 1500);
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