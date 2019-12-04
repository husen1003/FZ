<?php
	session_start();

	if(isset($_SESSION['admin'])){
		
	}
	else{
		header('location: login.php');	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wecome Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

  <?php
  include("header.php");
  ?>

	<br>
<!--	<button class="btn btn-secondary" style="float: right;" onclick="window.open.href: logout.php"><a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a></button>
	<h1 align="center" style="color: powderblue;">Welcome <?php	echo $_SESSION['admin'];	?></h1>
		<button type="" name="name"><a href="showuser.php" title="Login Here">Show User</a></button>
		<button type="" name="name"><a href="showadmin.php" title="Login Here">Show Admins</a></button>
		<button type="" name="name"><a href="addnewadmin.php" title="Login Here">Add new Admin</a></button> -->
	
</body>
</html>