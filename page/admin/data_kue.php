<?php
  session_start();

  if (!isset($_SESSION['login_admin_status'])) {
    echo "<script>window.location = 'index';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Data Kue</title>
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
            <li class="nav-item">
              <a class="nav-link" href="data_admin">Data Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_user">Data User</a>
            </li>
            <li class="nav-item active">
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
      <h4 class="my-4 text-orange"><i class="fas fa-user pr-2"></i> Data Kue</h4>
      <hr>

      <button type="button" class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#tambahKue">
        <i class="fas fa-plus"></i> Tambah Kue
      </button>

      <!-- Modal Tambah Kue -->
      <div class="modal fade" id="tambahKue" tabindex="-1" role="dialog" aria-labelledby="tambahKueLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form class="needs-validation" id="formTambahKue" action="inc/admin/data_kue/tambah_data" method="POST" novalidate>
              <div class="modal-body">
                <div class="form-group">
                  <label for="tambahNama">Nama Kue :</label>
                  <input type="text" class="form-control" name="tambahNama" id="tambahNama" required>
                  <div class="invalid-feedback">
                    Harap masukkan nama kue terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahKategori">Kategori :</label>
                  <select name="tambahKategori" id="tambahKategori" class="form-control" required>
                    <option value="" selected>Pilih</option>
                    <option value="kue pesta">Kue Pesta</option>
                    <option value="kue coklat">Kue Coklat</option>
                    <option value="kue ulang tahun">Kue Ulang Tahun</option>
                  </select>
                  <div class="invalid-feedback">
                    Harap masukkan kategori terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahHarga">Harga :</label>
                  <input type="number" class="form-control" name="tambahHarga" id="tambahHarga" required>
                  <div class="invalid-feedback">
                    Harap masukkan harga terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahKeterangan">Keterangan :</label>
                  <textarea name="tambahKeterangan" id="tambahKeterangan" class="form-control" required></textarea>
                  <div class="invalid-feedback">
                    Harap masukkan keterangan terlebih dahulu.
                  </div>
                </div>
                <div class="form-group">
                  <label for="tambahFoto">Unggah Foto :</label>
                  <input type="file" class="form-control-file" id="tambahFoto" name="tambahFoto" required>
                  <div class="invalid-feedback">
                    Harap masukkan foto terlebih dahulu.
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="submit" id="btnTambahKue" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
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
              <th scope="col">Kategori</th>
              <th scope="col">Harga</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody id="dataTable">
          </tbody>
        </table>
      </div>
    </div>

    <!-- Modal Ubah Kue -->
    <div class="modal fade" id="ubahKue" tabindex="-1" role="dialog" aria-labelledby="ubahKueLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="needs-validation" id="formUbahKue" action="" method="POST" novalidate>
            <div class="modal-body">
              <input type="text" name="ubahId" id="ubahId" hidden>
              <div class="form-group">
                <label for="ubahNama">Nama Kue :</label>
                <input type="text" class="form-control" name="ubahNama" id="ubahNama" required>
                <div class="invalid-feedback">
                  Harap masukkan nama kue terlebih dahulu.
                </div>
              </div>
              <div class="form-group">
                <label for="ubahKategori">Kategori :</label>
                <select name="ubahKategori" id="ubahKategori" class="form-control" required>
                  <option value="" selected>Pilih</option>
                  <option value="kue pesta">Kue Pesta</option>
                  <option value="kue coklat">Kue Coklat</option>
                  <option value="kue ulang tahun">Kue Ulang Tahun</option>
                </select>
                <div class="invalid-feedback">
                  Harap masukkan kategori terlebih dahulu.
                </div>
              </div>
              <div class="form-group">
                <label for="ubahHarga">Harga :</label>
                <input type="number" class="form-control" name="ubahHarga" id="ubahHarga" required>
                <div class="invalid-feedback">
                  Harap masukkan harga terlebih dahulu.
                </div>
              </div>
              <div class="form-group">
                <label for="ubahKeterangan">Keterangan :</label>
                <textarea name="ubahKeterangan" id="ubahKeterangan" class="form-control" required></textarea>
                <div class="invalid-feedback">
                  Harap masukkan keterangan terlebih dahulu.
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

    <!-- Footer -->
    <div class="my-bg mt-3 py-2 text-center">
      <small>Copyright 2018 by Kelompok Pemrograman Web 1</small>
    </div>

    <!-- Javascript -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bs-form-validator.js" type="text/javascript"></script>
    <script src="../../assets/plugin/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        function fetch_data() {
          $.ajax({
            url: '../../include/admin/data_kue/fetch_data',
            type: 'POST',
            success: function (data) {
              $("#dataTable").html(data);
            }
          });
        }

        fetch_data();

        $('#formTambahKue').on('submit', (function (e) {
          e.preventDefault();
          $.ajax({
            url: '../../include/admin/data_kue/add',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              if (data == 'invalid') {
                swal('Gagal', 'Data gagal disimpan', 'error');
              } else {
                swal('Berhasil', 'Data berhasil disimpan', 'success');
                fetch_data();
                $('#tambahNama').val('');
                $('#tambahKategori').val('');
                $('#tambahHarga').val('');
                $('#tambahKeterangan').val('');
                $('#tambahFoto').val('');
              }
            }
          });
        }));

        $(document).on('submit', '#formUbahKue', function () {
          $.ajax({
            url: '../../include/admin/data_kue/update',
            type: $('#formUbahKue').attr('method'),
            data: $('#formUbahKue').serialize(),
            success: function () {
              swal('Berhasil', 'Data berhasil diubah.','success');
            }
          })
        });

        $(document).on('click', '.btnUbah', function () {
          var id = $(this).data('ubahid');
          $.ajax({
            url: '../../include/admin/data_kue/find',
            type: 'POST',
            data: {id:id},
            success: function (data) {
              var json = $.parseJSON(data);
              for (let i = 0; i < json.length; i++) {
                $('#ubahId').val(json[i].id_kue);
                $('#ubahNama').val(json[i].nama);
                $('#ubahKategori').val(json[i].kategori);
                $('#ubahHarga').val(json[i].harga); 
                $('#ubahKeterangan').val(json[i].keterangan);  
              }
            }
          });  
        });

        $(document).on('click', '.btnStatus', function(){  
          var id = $(this).data('statusid');
          var status = $(this).data('status');
          swal({
            title: 'Apakah Anda Yakin?',
            text: 'Ingin mengubah status kue',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: 'gray',
            confirmButtonText: 'Ubah'
          }).then((result) => {
            if (result.value) {
              $.ajax({
                url: '../../include/admin/data_kue/status',
                type: 'POST',
                data: {id:id,status:status},
                success: function () {
                  fetch_data();
                  swal('Berhasil', 'Data berhasil diubah.','success');  
                }
              });
            }
          });
        });

        $(document).on('click', '.btnHapus', function(){  
          var id = $(this).data('hapusid');
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
                url: '../../include/admin/data_kue/delete',
                type: 'POST',
                data: {id:id},
                success: function () {
                  fetch_data();
                  swal('Berhasil', 'Data berhasil dihapus.','success');  
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