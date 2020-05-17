<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: index.php");
	exit;
}

require 'functions.php';

//mengambil id dan url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE ID = $id")[0];


?>

<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="../assets/image/home.png">
	<title>CDR BookStore</title>
	
	<style type="text/css">
		img {
			width: 110px;
			height: 150px;
		}

		h1 {
			text-align: center;
		}

		table {
			text-align: center;
			margin: auto;
			background-color: pink;
		}

		th {
			background-color: hotpink;
		}

		body {
			background: url(../assets/image/ps.png);
		}

		table {
			margin-top: 150px;
		}

		a {
			text-decoration: none;
			color: hotpink;
		}

		.button {

			border: none;
			color: white;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			transition-duration: 0.4s;
			cursor: pointer;
		}

		.button1 {
			background-color: white;
			color: hotpink;
			border: 2px solid hotpink;
		}

		.button1:hover {
			background-color: hotpink;
			color: white;
		}
	</style>

	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="../css/index.css">
      <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>

<body>
	
	<div class="navbar-fixed">
	<nav class="grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img class="caca" src="../assets/image/cdr4.png"></a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<form action="" method="post">
      	<li><a href="../home.php">Home</a></li>
        <li><a href="index.php">All Product</a></li>
        <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px;" href="login.php"><i class="material-icons left">assignment_ind</i>SIGN IN</a>
        </form>
      </ul>
    </div>
  </nav>
 </div>


<!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
		<form action="" method="post">
      	<li><a href="../home.php">Home</a></li>
        <li><a href="index.php">All Product</a></li>
        <a class="waves-effect waves-light btn-large" href="login.php"><i class="material-icons left">assignment_ind</i>SIGN IN</a>
        </form>
</ul>


<br>


		  <div class="card large" style="width: 400px; height: 700px; margin: auto;" >
		    <div class="card-image waves-effect waves-block waves-light" style="height: 600px;">
		      <img class="activator siji" src="../assets/image/<?= $buku["foto"]; ?>" alt="">
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4">Detail Buku<i class="material-icons right">more_vert</i></span>
		     <div class="back">
		      <a href="index.php"> <button class="btn waves-effect waves-light" type="submit" name="action">Back<i class="material-icons right">chevron_left</i></button></a>
				</div>
	
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
		      <h5>Deskripsi Buku</h5>
		      <hr>
		      <p><?= $buku["deskripsibuku"]; ?></p>
		       <h5>Pengarang</h5>
		       <hr>
		      <p><?= $buku["pengarang"]; ?></p>
		       <h5>Penerbit</h5>
		       <hr>
		      <p><?= $buku["penerbit"]; ?></p>
		       <h5>Harga</h5>
		       <hr>
		      <p> <?= $buku["harga"]; ?></p>
		    </div>
		  </div>

	
		 
	<br>

	<div class="row">
		<div class="col s12 m3"></div>
		
	</div>


	<script type="text/javascript" src="../../js/materialize.min.js"></script>
	<script type="text/javascript">
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);
	</script>
</body>

</html>