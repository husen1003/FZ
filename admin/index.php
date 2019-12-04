<?php

	include('../conn.php');
	session_start();

	if(isset($_SESSION['admin'])){
		
	}
	else{
		header('location: login.php');	
	}
?>
<?php
	include("header.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>All Dishes</title>
	<link rel="stylesheet" href="">

	<style type="text/css" media="screen">
		table img{
			height: 150px;
			width: 200px;
		}
	</style>

</head>
<body>
		<br>


<?php

	$cntuser1 = mysqli_query($con, "SELECT * from user");
	$cntuser = mysqli_num_rows($cntuser1);

	$cntadmin1 = mysqli_query($con, "SELECT * from admin");
	$cntadmin = mysqli_num_rows($cntadmin1);

	$cntdish1 = mysqli_query($con, "SELECT * from dishes");
	$cntdish = mysqli_num_rows($cntdish1);	

?>


<div class="row" style="text-align: center; font-size: 4em; width: 1373x;">
	<div class="col-4" title="Click Here to see all Users" style="background-color: powderblue;" onclick="window.location.href='showuser.php'" onmouseover="style='cursor: pointer; background-color: powderblue;';">
		<?php echo $cntuser; ?><br>
		Users
	</div>
	<div class="col-4" title="Click Here to see all Admins" style="background-color: grey;" onclick="window.location.href='showadmin.php'" onmouseover="style='cursor: pointer; background-color: grey;';">
		<?php echo $cntadmin; ?><br>
		Admins
	</div>
	<div class="col-4" title="Click Here to see all Dishes" style="background-color: gold;" onclick="window.location.href='dishes.php'" onmouseover="style='cursor: pointer; background-color: gold;';">
		<?php echo $cntdish; ?><br>
		Dish
	</div>	
</div>








</body>
</html>