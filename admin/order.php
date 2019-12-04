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
	<title>Orders from users</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <style type="text/css" media="screen">
 		table img{
			height: 150px;
			width: 200px;
		} 		
  </style>
</head>
<body>
	
  <?php

	$result = mysqli_query($con,"SELECT * FROM dishorder WHERE status NOT IN ('delivered') ORDER BY id DESC");echo "<br>";
	$cnt = mysqli_num_rows($result);
  
  include("header.php");
  ?>


	<!-- <button class="btn btn-secondary" onclick="window.open.href: logout.php"><a href="admindash.php" style="text-decoration: none; color: white;">HOME</a></button> -->

	<br><br>
	<h1 align="center">You have <?php echo $cnt; ?> Orders Pending.</h1><br>

	<input type="text" id="myInput" placeholder="Search by customer name" class="form-control" onkeyup="Search()">

	<br><br>
	<table align="center" id="myTable" class="table table-striped table-hover text-center" style="vertical-align: middle;">
		<thead class="thead-dark">
			<tr>
				<th>Date:</th>

				<th>Dish Title</th>

				<th>Customers name:</th>

				<th>Mobile no:</th>

				<th>Customers address:</th>

				<th>Status:</th>
			</tr>	
		</thead>

	


<?php

	while($row = mysqli_fetch_array($result))
	{
?>	


	<tr onclick="document.location = 'item_details.php?id=<?php echo $row['id'] ?>';" onmouseover="style='cursor: pointer';">
		<a href="item_details.php?id=<?php echo $row['id'] ?>">	
			<td style="line-height: 150px;"><?php echo $row['date']; ?></td>
			<td><?php echo $row['dish_name']; ?><br><img src="../<?php echo$row['dish_image'];?>"></img><br><?php echo "In RS.&nbsp;".$row['dish_price']; ?></td>
			<td style="line-height: 150px;"><?php echo $row['name']; ?></td>
			<td style="line-height: 150px;"><?php echo $row['mo']; ?></td>
			<td style="line-height: 60px;">At: <?php echo $row['street'].",<br>&nbsp;".$row['village']."&nbsp-&nbsp;".$row['pincode'].",&nbsp;".$row['state']; ?></td>
			<td style="line-height: 150px;"><a href="#" title="" class="btn btn-success" style="font-size: 20px;"><?php echo $row['status']; ?></a></td>
		</a>	

	<tr>
	</a>	
<?php		
	}	
?>	

	</table>

<script>
	function Search(){
		var filter = document.getElementById('myInput').value.toUpperCase();

		var myTable = document.getElementById('myTable');

		var tr = myTable.getElementsByTagName('tr');

		for (var i = 0; i < tr.length; i++) {
			var td = tr[i].getElementsByTagName('td')[2];

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