<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Login</title>
  </head>
  <body>
	<h1>Login</h1>

	<?php 
	//pesan error saat username/password kosong/tidak sesuai
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
		}
	}
	?>
	<!-- form login, data diproses ke cek_login.php -->
	<div class="box">
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Masukkan Username" class="form_login" required="required">
			<label>Password</label>
			<input type="password" name="password" placeholder="Masukkan Password" class="form_login" required="required">
			<hr>
			<!-- tombol aksi Login -->
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
		</form>
	</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>