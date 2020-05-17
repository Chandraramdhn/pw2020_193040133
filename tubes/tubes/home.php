<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" type="image/png" href="assets/image/home.png">
	<title>CDR BookStore</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

<!-- navbar	 -->
<div class="navbar-fixed">
	<nav class="grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img class="cdr" src="assets/image/cdr4.png"></a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<form action="" method="post">
      	<li><a href="home.php">Home</a></li>
        <li><a href="php/index.php">All Product</a></li>
        <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px;" href="php/login.php"><i class="material-icons left">assignment_ind</i>SIGN IN</a>
        </form>
      </ul>
    </div>
  </nav>
 </div>

<!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
		<form action="" method="post">
      	<li><a href="home.php">Home</a></li>
        <li><a href="php/index.php">All Product</a></li>
        <a class="waves-effect waves-light btn-large" href="login.php"><i class="material-icons left">assignment_ind</i>SIGN IN</a>
        </form>
</ul>

<!-- slider -->
	<div class="slider">
    <ul class="slides">
      <li>
        <img class="one" src="assets/image/one1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <img src="">
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      
    </ul>
  </div>




<!-- contact us -->
<section id="contact" class="contact scrollspy">
  <div class="container">
    <div class="row">
    <h3 class="light grey-text text-darken-3 center">Contact Me</h3>
      <div class="col s12 m6">
        <ul>
          <li>Sosial Media</li>
          <hr>
          <li><a class="ui black-text" href="https://www.instagram.com/chandrarmdhn_/?hl=id"><img src="assets/image/ig.png" width="5%">    Instagram</a></li>
          <li><a class="iu black-text" href="http://www.youtube.com/c/ChannelSans"><img src="assets/image/itg.png" width="5%">     Youtube</a></li>
        </ul>
      </div>
      <div class="col s12 m6">
        <ul>
          <li>Address</li>
          <hr>
          <li><i class="material-icons">location_on</i> Jln.Teratai Caracas B9 No 08-Kuningan</li>
          <li><i class="material-icons">location_on</i> Jln.H.Ridho 2-Setiabudi-Bandung</li>
        </ul>
      </div>
      </div>
    </div>
</section>


<!-- footer -->
	<footer class="page-footer grey darken-4">
          <div class="container">
          <div class="footer-copyright">
            <div class="container center">
            © CDR.Copyright 2020 
            </div>
          </div>
        </footer>





<script type="text/javascript" src="../js/materialize.min.js">
</script>
<script type="text/javascript">
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);
</script>
<script type="text/javascript">
	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider, {
		indicators: false,
		height : 490,
		transition : 600,
		interval : 3000
	});</script>
</body>
</html>