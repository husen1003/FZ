 <?php
	session_start();
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
<body>

	<table border="1" align="center" class="table table-striped table-hover">

	<tr>
		<td align="center"><h1>You have a Order of <a href="../<?php echo $row['dish_image']; ?>" style="text-decoration: none;"><?php echo $row['dish_name']; ?></a></h1></td>
		<td><h1> in RS. <b style="color: green;"><?php echo $row['dish_price']; ?> </b></h1></td>
	</tr>	
	<tr>
		<td align="center"><h2>Customer name is </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['name']; ?></b></h2></td>
	</tr>
	<tr>	
		<td align="center"><h2>Mobile Number of Customer is </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['mo']; ?></b></h2>
	</tr>
	<tr>	
		<td align="center"><h2>Email address of customer is </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['email']; ?></b></h2></td>
	</tr>	
	<tr>
		<td align="center"><h2>Adress of customer is </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['street'].",<br>&nbsp;".$row['village']."&nbsp-&nbsp;".$row['pincode'].",<br>&nbsp;".$row['state']; ?></b></h2></td>
	</tr>	
	<tr>
		<td align="center"><h2>Payment Method </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['Payment_method']; ?></b></h2></td>
	</tr>	
	<tr>
		<td align="center"><h2>Payment Status </h2></td>
		<td><h2><b style="color: green;"><?php echo $row['Payment_status']; ?></b></h2></td>
	</tr>
	<tr>
		<td align="center"><h2>Order Date and time</h2></td>
		<td><h2><b style="color: green;"><?php echo $row['date']; ?></b></h2></td>
	</tr>	
	<tr>
		<td align="center"><h2>Status: </h2></td>
		<td>
			<form method="POST">
			<select class="form-control" name="status">
				<option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
				<option value="order recieved">Order Recieved</option>
				<option value="packed">Packed</option>
				<option value="out for delivery">Out for Delivery</option>
				<option value="delivered">Deliverd</option>
			</select>
		</td>	
	</tr>	
	</table>
			<center>

				<button class="btn btn-info" onclick="window.location = 'order.php'">
					Back
				</button>				
				<button name="enter" class="btn btn-info">
					Send Status
				</button>

			</form>
			</center>
</body>
</html>

<?php
	if(isset($_POST['enter'])){
		$orderid = $id;
		$status = $_POST['status'];
		mysqli_query($con,"UPDATE dishorder SET status='$status' WHERE id=$orderid");

		if ($status == 'delivered') {
			mysqli_query($con,"UPDATE dishorder SET Payment_status='Successful' WHERE id=$orderid");			
		}

		?>

		<script>
			window.location = 'order.php';
		</script>
		
		<?php
	}
?>