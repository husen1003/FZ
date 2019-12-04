<?php
	session_start();
	include('header.php');
	include('../conn.php');
	$id = $_GET['did'];
if(isset($_SESSION['user'])){
    if((time() - $_SESSION['login_time']) > 1800){
      header('location: ../logout.php');
    }//60 is one minute
}
else{
    header('location: duplicateuser.php');
} 	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css" media="screen">
		.column {
		  float: left;
		  width: 33.33%;
		  padding: 10px;
		  height: 250px; /* Should be removed. Only for demonstration */
		}
		.column:hover{
		  color: gold;
		  text-decoration: none;
		}

	</style>



	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/icon.css">
	<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body>

<?php

	$result = mysqli_query($con,"SELECT * FROM dishes WHERE id = $id");
	$row = mysqli_fetch_array($result);
	echo "<br>";


?>
<div class="container-fluid row">
	<div class="col-7">
		<img src="../<?php echo $row['dish_image'] ?>" width="100%" height="300px;">
	</div>
	<div class="col-5">
			<h1> <?php echo $row['dish_name'] ?></h1><br>
			<h1 style="color: green;"> Only in RS. <?php echo $row['dish_price'] ?></h1><br>
			<h3>Details:-</h3><br>
			<h4 style="margin-left: 35px; border: 4px green;"> <?php echo $row['dish_discription']; ?></h4>

			<form method="GET" action="cart-process.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				Quantity :- <input type="number" name="qty" placeholder="Quantity" min="1" max="5" value="1" required="" style="width: 100px;">
				<button type="submit" onclick="window.location.href='#'" class="btn btn-info" style="width: 200px;">Add to Cart</button>
			</form>	
				

	</div>
</div>

	<br>
	




	<center>
	<button type="submit" onclick="window.location.href='order.php?id=<?php echo $id; ?>&item=1'" class="btn btn-success" style="width: 200px;">Order</button>


	</center>
<br><br><br>
<hr height="15px;" size="15px" color="black">
<h1 align="center">Releated Dishes</h1>
<br><br>

<?php

	$result1 = mysqli_query($con,"SELECT * FROM dishes WHERE dish_catagory = '$row[dish_catagory]' AND id NOT IN ($id) ");echo "<br>";
	while($row1 = mysqli_fetch_array($result1))
	{

?>

<a href="item_detail.php?did=<?php echo $row1['id'] ?>" style="color: white;">
  <div class="column" style="background-color:black;">
    <img src="../<?php echo$row1['dish_image'];?>" height="60%" width="100%">
    <p style="border-bottom: dotted; text-align: center;"><b style="letter-spacing: 3px;font-size: 20px;"><?php echo $row1['dish_price']; ?></b></p>
    <p style="border-bottom: dotted; text-align: center;"><b style="letter-spacing: 3px;font-size: 20px;"><?php echo $row1['dish_name']; ?></b></p>
  </div> 
 </a>  



<?php

	}

?>

</body>
</html>