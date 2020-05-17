<?php 

	echo "hasil";
	echo "<hr>";
	// echo "Username :".$_GET['username'];
	// echo "<br>";
	// echo "Password :".$_GET['password'];

	function ceklogin($username,$password)
	{
		if ($username == "chandra" && $password == "asyiap") {
			echo "berhasil login";
		}else{
			echo "salah goblog";
		}
	}

	//eksekusi
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username,$password)
 ?>