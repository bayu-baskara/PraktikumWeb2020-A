<?php 
// koneksi database
include 'config/config.php';
// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
// insert data ke database
mysqli_query($conn, "INSERT INTO tb_mahasiswa VALUES('','$nim','$nama','$alamat','')");
// mengalihkan halaman sesuai session yg masuk/login
session_start ();
if ($_SESSION['role']=="admin")
{
    echo "<script>alert('Data Berhasil Ditambah!');location='halaman_admin.php';</script>";
} else if ($_SESSION['role']=="pegawai")
{
    echo "<script>alert('Data Berhasil Ditambah!');location='halaman_pegawai.php';</script>";
}
?>