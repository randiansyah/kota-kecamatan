<?php

	require_once('konfigurasi.php');

if ($_POST) {

    $insertsql = "INSERT INTO kota (nama, dibuat_pada) VALUES('{$_POST['nama']}',NOW())";
    $koneksidb->exec($insertsql);
    header('Location: admin-kota_daftar.php');
}	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="admin-kota_buat.php">
        <h2 class="form-signin-heading">Register</h2>
	   <input type="text" name="nama" class="form-control" placeholder="Nama Kota" autofocus value><br>
	   <button class="btn btn-lg btn-primary btn-block" type="submit">Tambah</button>
      </form>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
