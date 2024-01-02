<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<!doctype HTML>
<html>
<head>
    <title>Admin Babaso</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/gaya.css" rel="stylesheet">
    <link href="../DataTables/datatables.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
		</style>
</head>
<body>
 	<!-- Awal script Navbar -->
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">BABAKSO</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="admin.php"><span class="glyphicon glyphicon-home"></span> Beranda <span class="sr-only">(current)</span></a>
						</li>
            <li>
							<a href="data.php"><span class="glyphicon glyphicon-envelope"></span> Kontrol Artikel</a>
						</li>
            <li>
							<a href="tampil-user.php"><span class="glyphicon glyphicon-user"></span>Daftar User</a>
						</li>
            <li>
							<a href="umpan-balik.php"><span class="glyphicon glyphicon-envelope"></span>Umpan Balik</a>
						</li>
            <li>
							<a href="../logout.php"><span class="glyphicon glyphicon-lock"></span>Keluar</a>
						</li>
           
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->
<br><br>