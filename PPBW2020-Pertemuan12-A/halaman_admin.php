<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Admin Page</title>
    <!-- koneksi database -->
    <?php
    include 'config/config.php';
    ?>
  </head>
  <body>
    <!-- Halaman Admin -->
    <!-- Title -->
    <h2>Data Mahasiswa Universitas Kerja Lembur</h2>
    <div class="jumbotron">
      <h3>Selamat Datang "<?php 
        //aktifkan session
        //ambil SESSION yang sedang LOGIN (cek_login.php)
        session_start ();
        //tampilkan SESSION
        echo $_SESSION['username'];
      ?>"
      </h3>
      <!-- tombol add & logout -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data</button>
      <a href="logout.php" class="btn btn-secondary active" role="button" aria-pressed="true" style="color:white">Logout</a>
      <!-- tabel preview database mahasiswa -->
      <table class="table">
        <thead>
          <tr>
              <!-- tabelhead -->
              <th scope="col">No</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
        <!-- isitabel -->
        <?php
          $no = 1;
          //query seleksi semua data di tb_mahasiswa
          $data = mysqli_query($conn,"select * from tb_mahasiswa");
          //menangkap data dari hasil perintah query dan membentuknya ke dalam array
          while ($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <!-- tampilkan array data sebagai isi dari tabel -->
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nim']; ?></td>
              <td><?php echo $d['nama']; ?></td>
              <td><?php echo $d['alamat']; ?></td>
              <td>
              <!-- tombol Opsi Edit & Hapus -->
              <!-- mengambil id data (action="GET" saat tombol Opsi diklik -->
                <a href="form_edit.php?id=<?php echo $d['id'];?>" class="btn btn-warning active" role="button" aria-pressed="true" style="color:white;">Edit</a>
                <a href="view_data.php?id=<?php echo $d['id'];?>" class="btn btn-danger active" role="button" aria-pressed="true">Hapus</a>
              </td>
            </tr>
          <?php
          }
        ?>
        </tbody>
      </table>
    </div>

    <!-- awal untuk pop-up tambah data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editmodalTitle">Masukkan Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
              //menjalankan form_tambah.php
              include 'form_tambah.php';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir untuk pop-up tambah data -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>