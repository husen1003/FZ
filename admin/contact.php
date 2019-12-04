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
	<title>Masseges from users</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
  <?php
  include("header.php");
  ?>


	<!-- <button class="btn btn-secondary" onclick="window.open.href: logout.php"><a href="admindash.php" style="text-decoration: none; color: white;">HOME</a></button> -->
	<h1 align="center">Masseges from users</h1>
	<div style="width: 100%;">
	<table align="center" class="table table-striped table-hover text-center">
		<thead class="thead-dark" style="background: grey; border-bottom: solid; border-top: solid;">
			<tr>
				<th>ID:</th>

				<th>Name:</th>

				<th>Mo:</th>

				<th>Email:</th>

				<th>Subject:</th>

				<th>Message:</th>
			</tr>	
		</thead>

	


<?php
	
	$result = mysqli_query($con,"SELECT * FROM contact");echo "<br>";
	while($row = mysqli_fetch_array($result))
	{
?>	

	<tr>	
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['mo']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['subject']; ?></td>
			<td><?php echo $row['msg']; ?></td>
	<tr>
<?php		
	}	
?>	

	</table>
</div>


</body>
</html>