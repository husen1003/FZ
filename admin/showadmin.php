<?php

	include('../conn.php');
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
	<title>Show Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
  <?php
  include("header.php");
  ?>


	<br><br>


	<!-- <button class="btn btn-secondary" onclick="window.open.href: logout.php"><a href="admindash.php" style="text-decoration: none; color: white;">HOME</a></button>

	<button class="btn btn-secondary" style="float: right;" onclick="window.open.href: logout.php"><a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a></button> -->

	<h1 align="center">Admins</h1>

	<br><br>
	<table align="center" class="table table-striped table-hover table-bordered text-center" style="width: 100%;">
		<thead class="thead-dark" style="border-bottom: solid; border-top: solid;">
			<tr>
				<th>ID:</th>

				<th>Userame:</th>

				<th>Password</th>

				<th>Delete:</th>
			</tr>	
		</thead>

	


<?php
	$number = 0;
	$result = mysqli_query($con,"SELECT * FROM admin");echo "<br>";
	while($row = mysqli_fetch_array($result))
	{
		$number++;
?>	

	<tr>	
			<td><?php echo $number; ?></td>
			<td><?php echo $row['uname']; ?></td>
			<td><?php echo $row['pass']; ?></td>
			<td>
				<a href="deladmin.php?id=<?php echo $row['id'] ?>">
					Delete
				</a>
			</td>
	<tr>
<?php		
	}	
?>	

	</table>

		<center>
			<button class="btn btn-secondary" onclick="addnewadmin.php"><a href="addnewadmin.php" title="Add new admin" style="text-decoration: none; color: white;"><div align="center">Add new Admin</div></a></button>
		</center>

<br><br><br><br>

</body>
</html>