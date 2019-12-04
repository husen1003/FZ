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
	<title>All Users</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
  <?php
  include("header.php");
  ?>


	<!-- <button class="btn btn-secondary" onclick="window.open.href: logout.php"><a href="admindash.php" style="text-decoration: none; color: white;">HOME</a></button> -->
	<h1 align="center">Users</h1>
	<input type="text" id="myInput" placeholder="Search user by name" class="form-control" onkeyup="Search()" style="margin: 0px 30px;">
	<div style="width:100%;">
	<table align="center" class="table table-striped table-hover text-center" id="myTable">
		<thead class="thead-dark">
			<tr>
				<th>ID:</th>

				<th>Name:</th>

				<th>Mo:</th>

				<th>Email:</th>

				<th>Password:</th>

				<th>Update:</th>

				<th>Delete:</th>
			</tr>	
		</thead>

	


<?php
	$number = 0;
	$result = mysqli_query($con,"SELECT * FROM user");echo "<br>";
	while($row = mysqli_fetch_array($result))
	{
		$number++;
?>	

	<tr>	
			<td><?php echo $number; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['mo']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['p1']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>&mo=<?php echo $row['mo'] ?>&email=<?php echo $row['email'] ?>&pwd=<?php echo $row['p1'] ?>">
					Update
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $row['id'] ?>">
					Delete
				</a>
			</td>
	<tr>
<?php		
	}	
?>	

	</table>
</div>



<br><br><br>

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