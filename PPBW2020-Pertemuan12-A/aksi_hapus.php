<?php
// koneksi database
include 'config/config.php';
// menangkap data id yang dikirim dari form
$id = $_GET['id'];
// delete data dari database
mysqli_query($conn,"DELETE FROM tb_mahasiswa WHERE id='$id'");
// mengalihkan halaman sesuai session yg masuk/login
session_start ();
if ($_SESSION['role']=="admin")
{
    echo "<script>alert('Data Berhasil Dihapus!');location='halaman_admin.php';</script>";
} else if ($_SESSION['role']=="pegawai")
{
    echo "<script>alert('Data Berhasil Dihapus!');location='halaman_pegawai.php';</script>";
}
?>