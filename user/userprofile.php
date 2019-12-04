<?php
include('../conn.php');
session_start();
$user = $_SESSION['user'];
//$email = $_SESSION['email'];
//$mo = $_SESSION['email'];

$a = mysqli_query($con, "SELECT * FROM user WHERE name = '$user'");
$b = mysqli_fetch_array($a);
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
      	function isNumberKey(evt)
      	{
         	var charCode = (evt.which) ? evt.which : event.keyCode
         	if (charCode > 31 && (charCode < 48 || charCode > 57)){
            	return false; 
            	document.getElementById("error").style.display = ret ? "none" : "inline";      
            } 
        }
      function validate() {

      	var mo = /^\d{10}$/;					/*Variable for 10 digit mobile number only*/

         var email = document.myForm.email.value;	/*variables for email validation */
         atpos = email.indexOf("@");
         dotpos = email.lastIndexOf(".");

      
         if( document.myForm.uname.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.uname.focus() ;
            return false;
         }     
		if( document.myForm.mo.value == "" ) {
            alert( "Please provide your Mobile Number!" );
            document.myForm.mo.focus() ;
            return false;
         }  

         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }

         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID");
            document.myForm.email.focus() ;
            return false;
         }    
         
         return( true );
      }        

</script>        


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<title></title>
<style>
	form{
		border-radius: 10px;
	 	background: #0007;
	  	box-shadow: 3px 2px 2px 2px black;
		}

</style>
</head>
<body>
<?php
	include("header.php");
	include("sidebar.php");
?>
<div class="main" style="margin-top: 100px;">




<center>
<form action="" name="myForm" method="POST" accept-charset="utf-8" style="width: 50%" onsubmit="return(validate());">
	

		<div class="form shadow-lg p-4" style="color: black;">
			
				<center> <h1 class="h">Update Details</h1></center>
			
		
		
				<div class="form-group" align="left">
					<label><b>Username:-</b></label>
					<input type="text" value="<?php echo $_SESSION['user']; ?>" name="uname" minlength="3" class="form-control" placeholder="Enter name" autocomplete="off" class="form-control">
				</div>


				<div class="form-group" align="left">
					<label><b>Mo Number:-</b></label>
					<input type="text" value="<?php echo $_SESSION['mo']; ?>" name="mo" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" placeholder="Enter only numeric digits" autocomplete="off" class="form-control">
				</div>



				<div class="form-group" align="left">
					<label><b>Email:</b></label>
					<input type="text" value="<?php echo $_SESSION['email']; ?>" name="email" class="form-control" placeholder="Enter email" autocomplete="off">
				</div>


				<button type="submit" name="enter" class="btn btn-success" style="width: 100%; font-size: 20px;">Update Details</button>
				<br><br>
				<a href="changepwd.php" title="change password from here" style="float: left;">Change Password</a>
				<br>


		</div>
	</form>
</form>

</center>




</div>

</body>
</html>



<?php

if (isset($_POST['enter'])) {


include('../conn.php');


	$name = $_POST['uname'];
	$mo = $_POST['mo'];
	$email = $_POST['email'];
	if($mo != $_SESSION['mo'] || $email != $_SESSION['email']){
					$checkm = mysqli_query($con,"SELECT * FROM user WHERE mo = '$mo'");//
					$m = mysqli_num_rows($checkm);

					$checke = mysqli_query($con,"SELECT * FROM user WHERE email = '$email'");	
					$e = mysqli_num_rows($checke);
					if($m == 1 && $e == 1)
					{
						?>
						<script>
							alert('Mobile number and email id is already exixsts');
						</script>
						<?php						
					}	

					elseif($m == 1)
					{
						$update_a = "UPDATE user SET name='$name' email='$email' WHERE id = '$_SESSION[id]'";
						if($_SESSION['mo'] != $mo)
						{
							?>
							<script>
								alert('Mobile number is already exixsts');
							</script>
							<?php
						}
						if(!mysqli_query($con, $update_a)){
							echo "Data not inserted.";
						}
						else{
							$_SESSION['user'] = $name;
							$_SESSION['email'] = $email;
						?>
							<script >
								alert('Your Details are updated!');
								window.location = "home.php";
							</script>
						<?php

						}						

					}

					elseif($e == 1)
					{
						$update_b = "UPDATE user SET name='$name', mo='$mo' WHERE id = '$_SESSION[id]'";
						if($_SESSION['email'] != $email)
						{
							?>
							<script>
								alert('Mobile number is already exixsts');
							</script>
							<?php
						}						

						if(!mysqli_query($con, $update_b)){
							echo "Data not inserted.";
						}
						else{
							$_SESSION['user'] = $name;
							$_SESSION['mo'] = $mo;
						?>
							<script >
								alert('Your Details are updated!');
								window.location = "home.php";
							</script>
						<?php

						}						


					}				
					else{
									
						$sql = "UPDATE user SET name='$name', mo='$mo', email='$email' WHERE id = '$_SESSION[id]'";
										
						if(!mysqli_query($con, $sql)){
							echo "Data not inserted.";
						}
						else{
							$_SESSION['user'] = $name;
							$_SESSION['mo'] = $mo;
							$_SESSION['email'] = $email;
						?>
							<script >
								alert('Your Details are updated!');
								window.location = "home.php";
							</script>
						<?php
						}
					}
		
				
	}
	else{

					$sql = "UPDATE user SET name='$name' WHERE id = '$_SESSION[id]'";
				
					if(!mysqli_query($con, $sql)){
						echo "Data not inserted.";
					}
					else{
					$_SESSION['user'] = $name;
					?>
						<script >
							alert('Your Details are updated!');
							window.location = "home.php";
						</script>
					<?php
						
					}	

	}
}
?>
<?php
include('footer.php');
?>