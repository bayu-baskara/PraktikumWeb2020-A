<?php 
if (isset($_GET['proses']))/* mengambil data dari tombol submit ditekan */
{
    /* proses deklarasi variabel dengan nilai berdasarkan inputan form*/
   $nama=$_GET['nama'];
   $nim=$_GET['nim'];
   $nilai1=$_GET['nilai1'];
   $nilai2=$_GET['nilai2'];
   $UTS=$_GET['UTS'];
   $UAS=$_GET['UAS'];
   /* proses perhitungan */
   $total=$nilai1+$nilai2+$UTS+$UAS;
   $average=($nilai1+$nilai2+$UTS+$UAS)/4;
   /* pengkondisian status (LULUS/TIDAK LULUS) */
   if ($average<=65)
   {
        $status="TIDAK LULUS";
   }
   else
   {
        $status="LULUS";
   }
}
else
{
   echo("Data Belum Terisi");
}
?>

<!-- OUTPUT DARI PROSES -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Result - Nilai Mahasiswa</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3 class="text-center">Nilai Akhir Mahasiswa</h3>
        <br>
        <table class="table" border="2">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nilai Tugas 1</th>
                    <th scope="col">Nilai Tugas 2</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <!-- PENCETAKAN NILAI YANG TERSIMPAN PADA VARIABEL -->
                    <td><?php echo ("$nama"); ?></td>
                    <td><?php echo ("$nim"); ?></td>
                    <td><?php echo ("$nilai1"); ?></td>
                    <td><?php echo ("$nilai2"); ?></td>
                    <td><?php echo ("$UTS"); ?></td>
                    <td><?php echo ("$UAS"); ?></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Jumlah Nilai</b></td>
                    <td><?php echo ("$total"); ?></td>
                    <td colspan="3" rowspan="2" class="teks text-center";>
                        <?php 
                            /* PENGKONDISIAN UNTUK MEMBERIKAN WARNA FONT PADA STATUS */
                            if ($status=="TIDAK LULUS")
                            {   
                                /* CETAK STATUS = FONT MERAH */
                                echo ("<font color='red'><br><b>$status</b></font>"); 
                            }
                            else if ($status=="LULUS")
                            {
                                /* CETAK STATUS = FONT HIJAU */
                                echo ("<font color='green'><br><b>$status</b></font>"); 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Rata-rata</b></td>
                    <!-- CETAK NILAI RATA-RATA -->
                    <td><?php echo ("$average"); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>   
</body>
</html>