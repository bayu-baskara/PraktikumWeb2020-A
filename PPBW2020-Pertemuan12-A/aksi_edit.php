<?php
// koneksi database
include 'config/config.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
// update data ke database
mysqli_query($conn,"UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'");
// mengalihkan halaman sesuai session yg masuk/login
session_start ();
if ($_SESSION['role']=="admin")
{
    echo "<script>alert('Data Berhasil Diubah!');location='halaman_admin.php';</script>";
} else if ($_SESSION['role']=="pegawai")
{
    echo "<script>alert('Data Berhasil Diubah!');location='halaman_pegawai.php';</script>";
}
?>