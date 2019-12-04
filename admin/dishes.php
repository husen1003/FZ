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
		<center>
			<button class="btn btn-success"><a href="adddish.php" title="Add new dish" style="text-decoration: none; color: white;"><div align="center">Add new Food Item</div></a></button>
		</center>	<br><br>
	<input type="text" id="myInput" placeholder="Search Dish" class="form-control" onkeyup="Search()">
	

	<table align="center" id="myTable" class="table table-striped table-hover text-center" style="vertical-align: middle;">
		<thead class="thead-dark">
			<tr>
				<th>ID:</th>

				<th>Dish Name:</th>

				<th>Dish Price:</th>

				<th>Dish Image</th>

				<th>Dish Catagory</th>

				<th>Update:</th>

				<th>Delete:</th>
			</tr>	
		</thead>

	


<?php
	$number = 0;
	$result = mysqli_query($con,"SELECT * FROM dishes");echo "<br>";
	while($row = mysqli_fetch_array($result))
	{
		$number++;
?>	

	<tr>	
			<td style="line-height: 150px;"><?php echo $number; ?></td>
			<td style="line-height: 150px;"><?php echo $row['dish_name']; ?></td>
			<td style="line-height: 150px;"><?php echo $row['dish_price']; ?></td>
			<td><img src="../<?php echo$row['dish_image'];?>"></img></td>
			<td style="line-height: 150px;"><?php echo $row['dish_catagory']; ?></td>
			<td style="line-height: 150px;">
				<a href="updatedish.php?id=<?php echo $row['id'] ?>" title="Update from here">
					Update
				</a>
			</td>
			<td style="line-height: 150px;">
				<a href="deletedish.php?id=<?php echo $row['id'] ?>">
					Delete
				</a>
			</td>
	<tr>
<?php		
	}	
?>	

	</table>

		<center>
			<button class="btn btn-success"><a href="adddish.php" title="Add new dish" style="text-decoration: none; color: white;"><div align="center">Add new Food Item</div></a></button>
		</center>

<script>
	function Search(){
		var filter = document.getElementById('myInput').value.toUpperCase();

		var myTable = document.getElementById('myTable');

		var tr = myTable.getElementsByTagName('tr');

		for (var i = 0; i < tr.length; i++) {
			var td = tr[i].getElementsByTagName('td')[1];

			if(td){
				var textvalue = td.textcontent || td.innerHTML;

				if(textvalue.toUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}
				else{
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>


</body>
</html>