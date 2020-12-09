<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Preview Data</title>

    <!--style untuk view_data.php-->
    <style>
      .jumbotron {
        width: 45%;
        height: 380px;
        margin: 50px auto;
      }
      .btn a{
        color: white;
      }
     
      h2 {
        padding-top: 40px;
        text-align: center;
      }

      table {
        margin: 50px auto;
      }

      .btn {
        margin-top: 25px;
      }

      .btn-secondary {
        margin-top: -100px;
        margin-left: 460px;
      }

      .btn-success {
        margin-top: -53px;
        margin-left: 380px;
      }

      label {
        margin-right: 25px;
      }
    </style>
  </head>
  <body>
    <h2>Hapus Data Mahasiswa?</h2>
    <div class="jumbotron">
      <?php
      //koneksi database
      include 'config/config.php';
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_GET['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM tb_mahasiswa WHERE id='$id'");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="get" action="aksi_hapus.php">
        <table>
        <!-- data yg ditangkap, kemudian ditampilkan sebagai data non-editable pada form -->
            <tr>
                <td>
                  <label>NIM</label>
                </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" readonly class="form-control-plaintext" name="nim" value="<?php echo $d['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                  <label>Nama</label>
                </td>
                <td><input type="text" readonly class="form-control-plaintext" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
                <td>
                  <label>Alamat</label>
                </td>
                <td><input type="text" readonly class="form-control-plaintext" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
        </table>
        <!-- tombol Hapus -->
        <button type="submit" class="btn btn-success">Hapus</button>
        <?php 
        //SESSION akan dipanggil kembali untuk aksi yg dihasilkan masing2 tombol
        session_start ();
        if ($_SESSION['role']=="admin")
        //jika role=admin
        {
          //alihkan halaman ke halaman_admin
          ?>
          <a href="halaman_admin.php" class="btn btn-secondary active" role="button" aria-pressed="true">Kembali</a>
          <?php
        } else if ($_SESSION['role']=="pegawai")
        //jika role=pegawai
        {
          //alihkan halaman ke halaman_pegawai
          ?>
          <a href="halaman_pegawai.php" class="btn btn-secondary active" role="button" aria-pressed="true">Kembali</a>
          <?php
        }
        ?>
      </form>
      <?php } ?>  
    </div>
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>