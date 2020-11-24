<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Input - Nilai Mahasiswa</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <!-- FORM INPUTAN -->
            <!-- METHOD "GET" DIGUNAKAN UNTUK MEMBERIKAN NILAI KE SUATU VARIABEL-->
            <form action="proses.php" method="GET"> 
                <h4 class="text-center">Masukkan Data Mahasiswa</h4>
                <br>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nim" id="nim">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai1" class="col-sm-3 col-form-label">Nilai Tugas 1</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nilai1" id="nilai1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai2" class="col-sm-3 col-form-label">Nilai Tugas 2</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nilai2" id="nilai2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-sm-3 col-form-label">Nilai UTS</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="UTS" id="uts">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-sm-3 col-form-label">Nilai UAS</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="UAS" id="uas">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>