<?php
session_start();
include('header.php');

	include('../conn.php');
	$id = $_GET['id'];
	$result = mysqli_query($con, "SELECT * FROM dishorder WHERE id = '$id'");
	$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Details of Ordered items</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body bgcolor="powderblue">
	<br>
	<h1 align="center" style="font-size: 4em;"><?php echo $row['dish_name']; ?></h1><br><br>
	<center><img width="40%" height="300px;" src="../<?php echo $row['dish_image']; ?>" alt="Dish Image"></center>

	<table border="1" align="center" class="table table-striped table-hover">

	<tr>
		<td align="center" style="width: 50%;"><h1>You Ordered </h1></td>
		<td><h1><?php echo $row['dish_name']; ?></h1></td>
	</tr>	
	<tr>
		<td align="center"><h2>Price: </h2></td>
		<td><h1> in RS. <b style="color: green;"><?php echo $row['dish_price']; ?> </b></h1></td>
	</tr>
	<tr>	
		<td align="center"><h2>Mobile Number:</h2></td>
		<td><h2><b style="color: green;"><?php echo $row['mo']; ?></b></h2>
	</tr>
	<tr>
		<td align="center"><h2>Shipping Adress:</h2></td>
		<td><h2><b style="color: green;"><?php echo $row['street'].",<br>&nbsp;".$row['village']."&nbsp-&nbsp;".$row['pincode'].",<br>&nbsp;".$row['state']; ?></b></h2></td>
	</tr>	
	<tr>
		<td align="center"><h2>Status: </h2></td>
		<td>
			<h2><b style="color: green;"><?php echo $row['status']; ?></b></h2>
		</td>	
	</tr>	
	</table>
			<center>
				
				<a href="home.php">
					<button class="btn btn-info" style="width: 20%;">
						Home
					</button>
				</a>
				<a href="myorders.php">
					<button class="btn btn-info" style="width: 20%;">
						Back
					</button>
				</a>							

			</form>
			</center>
</body>
</html>