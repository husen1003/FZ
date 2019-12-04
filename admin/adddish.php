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
	include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add food Item</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/icon.css">
		<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>
		<script type = "text/javascript">

      		function isNumberKey(evt)
      		{
         		var charCode = (evt.which) ? evt.which : event.keyCode
         		if (charCode > 31 && (charCode < 48 || charCode > 57)){
           		 	return false; 
            		document.getElementById("error").style.display = ret ? "none" : "inline";      
            	} 
        	}
		</script>        		
		<style type="text/css" media="screen">
			body{
			    margin: 0px;
    			padding: 0px;
  			}
			.form{

			      background: rgba(89, 67, 180, 0.9);
			}				
		</style>
</head>
<body>
	<br><br><br><br>
	<center>
    <form action="" method="POST" style="width: 40%" enctype="multipart/form-data">
      <div class="form shadow-lg p-4" style="color: black;">

    <h2 align="center" style="color: white;"> Add Food Dishes </h2><br><br>
      <div class="form-group" align="left">

        <label style="color: white;"><b>Item Name:-</b></label>
        <input type="text" name="dname" required="required" placeholder="Enter Dish Name" class="form-control" autocomplete="off" minlength="5">

        <br>


        <label style="color: white;"><b>Item Price:-</b></label>
        <input type="text" name="dprice" onkeypress="return isNumberKey(event)" required="required" placeholder="Enter Price" class="form-control" autocomplete="off" maxlength="5">

        <br>

        <label style="color: white;"><b>Select Catagory:-</b></label>

      	<select class="form-control" name="dcatagory" required aria-required="true">
      		<option value="">Select</option>
        	<option value="Gujarati">Gujarati</option>
        	<option value="Punjabi">Punjabi</option>
        	<option value="Chinese">Chinese</option>
        	<option value="South_Indian">South Indian</option>
        	<option value="Fast_food">Fast Food</option>
      	</select>        

        <br>

        <label style="color: white;"><b>Select Item Image:-</b></label>
        <input type="file" name="dimage" required="required" class="form-control" autocomplete="off">

        <br>

        <label style="color: white;"><b>Item Discription about Item:-</b></label>
        <textarea name="ddiscription" required="required" placeholder="Enter information About the Item" autocomplete="off" class="form-control" rows="5"></textarea>

        <br>                        



      <button type="submit" name="add" class="btn btn-success" style="width: 100%;"> Add <i class="fa fa-plus" aria-hidden="true"></i></button>      
    </div>
    </form>		
    </center>	
</body>
</html>


<?php

if(isset($_POST['add'])){


	$v1 = rand(1111,9999);
	$v2 = rand(1111,9999);
	$v3 = $v1.$v2;

	$v3 = md5($v3);

	$a = $_FILES["dimage"]["name"];
	$b = "../dish_images/".$v3.$a;
	$b1 = "dish_images/".$v3.$a;
	move_uploaded_file($_FILES["dimage"]["tmp_name"], $b);

	mysqli_query($con, "INSERT INTO dishes (dish_name, dish_price, dish_image, dish_catagory, dish_discription) VALUES('$_POST[dname]', $_POST[dprice], '$b1', '$_POST[dcatagory]', '$_POST[ddiscription]')");

	?>
<script>
window.location = "dishes.php";
</script>

  <?php


}





?>