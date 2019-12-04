<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>




<?php
	include('../conn.php');
	session_start();
	$dish = array();

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		unset($_SESSION['dishcart'][$id]);
		unset($_SESSION['qtycart'][$id]);
	}

	if(isset($_SESSION['dishcart']) && !empty($_SESSION['dishcart'])){



		echo "<table class='table table-hover table-striped' style='width: 80%' align='center'>";
			echo "<thead class='thead-dark'>";
				echo "<tr>";
					echo "<th>No:</th>";
					echo "<th>Dish Name:</th>";
					echo "<th>Quantity:</th>";
					echo "<th>Price</th>";
					echo "<th>Image</th>";
					echo "<th>Subtotal:</th>";
					echo "<th>Remove:</th>";
				echo "</tr>";
			echo "</thead>";		

				$i = 0;
				$grandtotal = array();
				foreach ($_SESSION['dishcart'] as $key => $value) {
					$i++;

					$result = mysqli_query($con,"SELECT * FROM dishes WHERE id = '{$value}'");
					$row = mysqli_fetch_array($result);

					$qty = $_SESSION['qtycart'][$key];

					$subtotal = $row['dish_price'] * $qty;

					echo "<tr>";

						echo "<td>$i</td>";
						echo "<td>{$row['dish_name']}</td>";
						echo "<td>$qty</td>";
						echo "<td>{$row['dish_price']}</td>";
						echo "<td><img src='../{$row['dish_image']}' style='width: 100px;'></td>";
						echo "<td>$subtotal</td>";
						echo "<td><a href='?id=$key'>Remove</a></td>";


						$dish[] = $row['id'];

					echo "</tr>";



					$grandtotal[] = $subtotal;
				}

				$finalsum = array_sum($grandtotal);
					echo "<tr>";

						echo "<td><b>Total</b></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td>$finalsum</td>";
						echo "<td></td>";

					echo "</tr>";

			echo "</table>";
		?>
		<center>
		<button class="btn btn-info" onclick="window.location.href='home.php'">
			Order more
		</button>
		<button class="btn btn-success" onclick="window.location.href='order.php?id=<?php echo http_build_query($dish); ?>&item=<?php echo $i; ?>'">
			Place Order
		</button>		
		</center>	

		<?php		

	}
	else{
		echo "<center><h1>Cart Is Empty :(</h1><br><br>";
		?>
		<button class="btn btn-info" onclick="window.location.href='home.php'">
			Order more
		</button>
		</center>	

		<?php	

	}

echo '<pre>'; print_r($dish); echo '</pre>';

?>


</body>
</html>