<?php

	include('../conn.php');
	session_start();

	if(isset($_SESSION['admin'])){
		
	}
	else{
		header('location: login.php');	
	}
?>
<html>
<head>
  <title> Add new Admin </title> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<style>



</style>
<body>
	
  <?php
  include("header.php");
  ?>

<!--<br>
	<button class="btn btn-secondary" onclick="window.open.href: logout.php"><a href="admindash.php" style="text-decoration: none; color: white;">HOME</a></button>	

	<button class="btn btn-secondary" style="float: right;" onclick="window.open.href: logout.php"><a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a></button>-->

    <br><br>
 <div class="container">

  	<h2 align="center"> Add New Admin </h2><br><br>

    <center>
    <form action="" method="POST" style="width: 50%">
      <div class="form shadow-lg p-4" align="left">

         <label for="email"><b>Username:-</b></label>
        <input type="User" name="uname" id="Username" required="required" placeholder="Enter Username" class="form-control" autocomplete="off">

        <br>


       <label><b> Password:-</b></label></h3>
        <input type="password" name="pass" id="password" required="required" placeholder="password" class="form-control" autocomplete="off">

        <br>

        <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div><br>
  
      <center><button type="submit" name="add" class="btn btn-success" style="width: 100%;"> ADD </button></center>
      <br><br><br><br><br>
    </div>
    </form>
  </center>
 
</body>

</html>




<?php
if(isset($_POST['add']))
{


	$a = $_POST['uname'];
	$b = $_POST['pass'];


	$check = mysqli_query($con,"SELECT * FROM admin WHERE uname = '$a'");
	$n = mysqli_num_rows($check);
	if($n == 1){
		?>
		<script>
			alert('Username Already Exist');
		</script>
		<?php
	}
	else{


	
	$sql = "INSERT INTO admin (uname,pass) VALUES ('$a','$b')";
	
	if(!mysqli_query($con, $sql)){
	echo "Data not inserted.";
	}	

	header('location: showadmin.php');
}

}	