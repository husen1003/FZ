<?php
session_start();
include('../conn.php');
include('header.php');
$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Orders</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		table img{
			height: 150px;
			width: 200px;
		}		
	</style>
</head>
<body>
	<table align="center" class="table table-striped table-hover text-center" style="vertical-align: middle; margin-top: 17px;">
		<thead class="thead-dark" style="border-bottom: solid;border-top;">
			<tr>
				<th>Time:-</th>

				<th>Image of Item:</th>

				<th>Shipping Address:-</th>

				<th>Status:-</th>				

				<th>INFO:-</th>

			</tr>	
		</thead>

	


<?php
	
	$result = mysqli_query($con,"SELECT * FROM dishorder WHERE userid = '$id' ORDER BY id DESC ");echo "<br>";
	$n = mysqli_num_rows($result);

		if($n==0){

			echo "<tr><td colspan=5><h1>You Have not Ordered yet!! :(</h1></td></tr>";
		}

	while($row = mysqli_fetch_array($result))
	{

?>	

	<tr>	
			<td style="line-height: 210px;"><?php echo $row['date']; ?></td>
			<td><?php echo $row['dish_name']; ?><br><img src="../<?php echo$row['dish_image'];?>"></img><br><?php echo "In RS.&nbsp;".$row['dish_price']; ?></td>
			<td style="line-height: 90px;">At: <?php echo $row['street'].",<br>&nbsp;".$row['village']."&nbsp-&nbsp;".$row['pincode'].",&nbsp;".$row['state']; ?></td>
			<td style="line-height: 140px;"><div class="btn btn-success" style="margin-top: 80px;"><?php echo $row['status']; ?></div></td>			
			<td style="line-height: 210px;"><a href="order_details.php?id=<?php echo $row['id']; ?>" title="">More Details</a></td>
	<tr>
<?php		
	}	


?>	

	</table>

<?php

		if($n==0){
			echo "<center><a href='home.php' class='btn btn-success'>Order Now</a></center>";

		}

?>		
</body>
</html>