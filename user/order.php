<?php
$id = $_GET['id'];
	session_start();
	include('header.php');
?>
<?php
	include('../conn.php');
	$result = mysqli_query($con,"SELECT * FROM dishes WHERE id = $id");
	$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Food Dish</title>
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>

  <style>
		.btn{
			width: 20%;
			margin-top: 20px;
  			background-color: green;
 			color: white;
		}
		.btn:hover{
			background-color: red;
		}
		form{
		border-radius: 10px;
	 	background: #0007;
	  	box-shadow: 3px 2px 2px 2px black;
		}


	</style>
</head>
<body>




	<div style="background: url(../image/123.jpg); background-size:100% 100%; padding-top: 100px; padding-bottom: 100px;">
<center>
<form method="POST" style="width: 50%;">
	

		<div class="form shadow-lg p-4" style="color: white;">
				<center> <h2> Fill Up Billing Details </h2></center>
			
		
		
				<div class="form-group" align="left">
					<label><b>Name :- </b></label>
					<input type="text" value="<?php echo $_SESSION['user'] ?>" name="name" minlength="3" class="form-control" placeholder="Enter Your Name" autocomplete="off" required>
				</div>


				<div class="form-group" align="left">
					<label><b>Mobile Number :- </b></label>
					<input type="text" value="<?php echo $_SESSION['mo'] ?>" name="mo" minlength="10" maxlength="10" placeholder="Mobile Number" autocomplete="off" class="form-control" required>
				</div>

				<div class="form-group" align="left">
					<label><b>Email :- </b></label>
					<input type="email" value="<?php echo $_SESSION['email'] ?>" name="email" class="form-control" placeholder="Enter email" autocomplete="off" required>
				</div>

				<div class="form-group" align="left">
					<label><b> Street :- </b></label>
					<textarea class="form-control" name="street" placeholder="Street name" autocomplete="off" required="required">	
					</textarea>
				</div>


				<div class="form-group" align="left">
					<label><b>City :- </b></label>
					<input type="text" name="city" class="form-control" placeholder="City name" autocomplete="off" required="required">
				</div>

			
				<div class="form-group" align="left">
					<label><b>Pincode Number :- </b></label>
					<input type="Pincode" name="pin" minlength="6" maxlength="6" placeholder="Pincode Number" autocomplete="off" class="form-control" required="required">
				</div>

				<div class="form-group" align="left">
					<label><b> State :- </b></label>
				      	<select class="form-control" name="state" required aria-required="true">
				      		<option value="">Select</option>
				        	<option value="Gujarat">Gujarat</option>
				        	<option value="Rajasthan">Rajasthan</option>
				        	<option value="M.P.">Madhya Pradesh</option>
				        	<option value="Maharashtra">Maharashtra</option>
				      	</select> 
				</div>

				<div class="form-group" align="left">
					<label><b>Payment Method :- </b></label><br>
					Cash On Delivery:- <input type="radio" name="payment" value="COD" required="required"><br>
					Online Payment:- <input type="radio" name="payment" value="Online" required="required">
				</div>				


				<input type="hidden" name="dt" value="<?php echo date('D-d-M-Y'); ?>" readonly="readonly">

				<input type="hidden" name="uid" value="<?php echo $_SESSION['id'] ?>" readonly="readonly">

				<input type="hidden" name="status" value="order recieved" readonly="readonly">



				<div class="form-group" align="center">
					<button class="btn btn-success" name="enter">
						Submit
					</button>
				</div>


		</div>
</form>
</div>
</body>
</html>
<?php
$item = $_GET['item'];
if(isset($_POST['enter'])) {




					$uid = $_POST['uid'];
					$name = $_POST['name'];
					$mo = $_POST['mo'];
					$email = $_POST['email'];
					$street = $_POST['street'];
					$city = $_POST['city'];
					$pincode = $_POST['pin'];
					$state = $_POST['state'];
					$dishname = $row['dish_name'];
					$dishprice = $row['dish_price'];
					$dishimg = $row['dish_image'];
					$status = $_POST['status'];
					$payment = $_POST['payment'];		
					$date = $_POST['dt'];
					if ($payment == 'COD') {
						$payment_status = 'Pending';
						?>
							<script>
								window.location.href = "myorders.php";
							</script>
						<?php
					}
					else{
						$payment_status = 'Successful';
						?>

						<script>
							window.location.href = 'checkout.php';
						</script>

						<?php

					}

					//$sql = "INSERT INTO order (name) VALUES ('$name')";

					$sql = "INSERT INTO dishorder (userid,name,mo,email,street,village,pincode,state,dish_name,dish_price,dish_image,status,Payment_method,Payment_status,date) VALUES ('$uid','$name','$mo','$email','$street','$city','$pincode','$state','$dishname','$dishprice','$dishimg','$status','$payment','$payment_status','$date')";
					mysqli_query($con, $sql);


}

?>