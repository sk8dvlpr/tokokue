<?php
  session_start();

  if (!isset($_SESSION['login_admin_status'])) {
    echo "<script>window.location = 'index';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Data Admin</title>
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
    <link rel="stylesheet" href="../../assets/plugin/sweetalert/dist/sweetalert2.min.css" type="text/css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid my-bg">
        <div class="row">
          <div class="col-lg-8">
              <img class="navbar-logo" src="../../assets/images/logo.png" alt="Logo">
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
            <li class="nav-item">
              <a class="nav-link" href="../../"><i class="fas fa-home"></i> Halaman Utama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard">Dashboard</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="data_admin">Data Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_user">Data User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_kue">Data Kue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_transaksi">Data Transaksi</a>
            </li>
          </ul>
        </div>
        
        <button type="button" class="btn btn-sm btn-danger" id="btnLogout"><i class="fas fa-sign-out-alt"></i> KELUAR</button>
      </div>
    </nav>

    <!-- Content -->
    <div class="container">
      <h4 class="my-4 text-orange"><i class="fas fa-user pr-2"></i> Data Admin</h4>
      <hr>

      <button type="button" class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#tambahAdmin">
        <i class="fas fa-plus"></i> Tambah Admin
      </button>

      <!-- Modal Tambah Admin -->
      <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="tambahAdminLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form class="needs-validation" id="formTambahAdmin" action="" method="POST" novalidate>
              <div class="modal-body">
                <div class="form-group">
                  <label for="tambahNama">Nama Lengkap :</label>
                  <input type="text" class="form-control" name="tambahNama" id="tambahNama" required>
                  <div class="invalid-feedback">
                    Harap masukkan nama lengkap terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahEmail">Email :</label>
                  <input type="email" class="form-control" name="tambahEmail" id="tambahEmail" required>
                  <div class="invalid-feedback">
                    Harap masukkan email terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahUsername">Username :</label>
                  <input type="text" class="form-control" name="tambahUsername" id="tambahUsername" required>
                  <div class="invalid-feedback">
                    Harap masukkan username terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahPassword">Password :</label>
                  <input type="password" class="form-control" name="tambahPassword" id="tambahPassword" required>
                  <div class="invalid-feedback">
                    Harap masukkan password terlebih dahulu.
                  </div>
                </div>
              </div>
            
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="my-bg">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody id="dataTable">
          </tbody>
        </table>

        <!-- Modal Ubah Admin -->
        <div class="modal fade" id="ubahAdmin" tabindex="-1" role="dialog" aria-labelledby="ubahAdminLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="needs-validation" id="formUbahAdmin" action="" method="POST" novalidate>
                <div class="modal-body">
                  <input type="text" name="ubahId" id="ubahId" hidden>
                  <div class="form-group">
                    <label for="ubahNama">Nama Lengkap :</label>
                    <input type="text" class="form-control" name="ubahNama" id="ubahNama" required>
                    <div class="invalid-feedback">
                      Harap masukkan nama lengkap terlebih dahulu.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ubahEmail">Email :</label>
                    <input type="email" class="form-control" name="ubahEmail" id="ubahEmail" required>
                    <div class="invalid-feedback">
                      Harap masukkan email terlebih dahulu.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ubahUsername">Username :</label>
                    <input type="text" class="form-control" name="ubahUsername" id="ubahUsername" required>
                    <div class="invalid-feedback">
                      Harap masukkan username terlebih dahulu.
                    </div>
                  </div>
                </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="my-bg mt-3 py-2 text-center">
      <small>Copyright 2018 by Kelompok Pemrograman Web 1</small>
    </div>

    <!-- Javascript -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bs-form-validator.js" type="text/javascript"></script>
    <script src="../../assets/plugin/sweetalert/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        function fetch_data() {
          $.ajax({
            url: '../../include/admin/data_admin/fetch_data',
            type: 'POST',
            success: function (data) {
              $("#dataTable").html(data);
            }
          });
        }

        fetch_data();

        $(document).on('submit', '#formTambahAdmin', function () {
          $.ajax({
            url: '../../include/admin/data_admin/add',
            type: $('#formTambahAdmin').attr('method'),
            data: $('#formTambahAdmin').serialize(),
            success: function (data) {
              swal('Berhasil', 'Data Berhasil ditambahkan', 'success');
            }
          })
        });

        $(document).on('submit', '#formUbahAdmin', function () {
          $.ajax({
            url: '../../include/admin/data_admin/update',
            type: $('#formUbahAdmin').attr('method'),
            data: $('#formUbahAdmin').serialize(),
            success: function (data) {
              swal('Berhasil', 'Data Berhasil ditambahkan', 'success');
            }
          })
        });

        $(document).on('click', '.btnUbah', function () {
          var id = $(this).data('ubahid');
          $.ajax({
            url: '../../include/admin/data_admin/find',
            type: 'POST',
            data: {id:id},
            success: function (data) {
              var json = $.parseJSON(data);
              for (let i = 0; i < json.length; i++) {
                $('#ubahId').val(json[i].id_admin);
                $('#ubahNama').val(json[i].nama);
                $('#ubahEmail').val(json[i].email);
                $('#ubahUsername').val(json[i].username);  
              }
            }
          });  
        });

        $(document).on('click', '.btnStatus', function(){  
          var id = $(this).data('statusid');
          var status = $(this).data('status');
          swal({
            title: 'Apakah Anda Yakin?',
            text: 'Ingin mengubah status aktif admin',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: 'gray',
            confirmButtonText: 'Ubah'
          }).then((result) => {
            if (result.value) {
              $.ajax({
                url: '../../include/admin/data_admin/status',
                type: 'POST',
                data: {id:id,status:status},
                success: function () {
                  fetch_data();
                  swal('Berhasil', 'Data berhasil diubah.','success')  
                }
              });
            }
          });
        });

        $(document).on('click', '.btnHapus', function(){  
          var id = $(this).data('hapus');
          swal({
            title: 'Apakah Anda Yakin?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: 'gray',
            confirmButtonText: 'Hapus'
          }).then((result) => {
            if (result.value) {
              $.ajax({
                url: '../../include/admin/data_admin/delete',
                type: 'POST',
                data: {id:id},
                success: function () {
                  fetch_data();
                  swal('Berhasil', 'Data berhasil dihapus.','success')  
                }
              });
            }
          });
        });
        
        $(document).on('click', '#btnLogout', function () {
          swal({
            title: 'Apakah Anda Yakin?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: 'gray',
            confirmButtonText: 'Logout'
          }).then((result) => {
            if (result.value) {
              $.ajax({
                url: '../../include/admin/logout',
                type: 'POST',
                success: function () {
                  swal('Berhasil', 'Anda berhasil logout.','success');
                  setTimeout(function(){ window.location = 'index' }, 1500);
                }
              });
            }
          });
        });
      });
    </script>
</body>
</html>