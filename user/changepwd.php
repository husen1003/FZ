<?php
	session_start();
	require("header.php");
	require("sidebar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function validate() {
			var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			var pass = document.myForm.pass.value;		/*Variables for Compare Passwords*/
      		var pass1 = document.myForm.pass1.value;

         if( document.myForm.oldpass.value == "" ) {
            alert( "Please provide your Old Password!" );
            document.myForm.oldpass.focus() ;
            return false;
         }

         if( document.myForm.pass.value == "" ) {
            alert( "Please provide your new Password!" );
            document.myForm.pass.focus() ;
            return false;
         }

		if(!document.myForm.pass.value.match(decimal)) 
		{ 
			alert('Password must be 8-15, which have contains Atleast 1 uppercase, 1 lowercase and 1 special character')
			return false;
		}

         if( document.myForm.pass1.value == "" ) {
            alert( "Please Confirm Your New Password!" );
            document.myForm.pass1.focus() ;
            return false;
         }      
		if (pass != pass1) {
			 alert("Both new Passwords are not matched");
			 return false; 
		}            
         
         return( true );

		}	


	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="main">
		<center>
		<form action="changepwd.php" name="myForm" method="POST" accept-charset="utf-8" style="width: 50%" onsubmit="return(validate());">
			

				<div class="form shadow-lg p-4" style="color: black;">
					
						<center> <h1 class="h">Registration</h1></center>

						<div class="form-group" align="left">
							<label for="email"><b>Old Password:-</b></label>
							<input type="password" name="oldpass" value="$_SESSION['pwd']" class="form-control" placeholder="Enter old Password" disabled="">
						</div>						

						<div class="form-group" align="left">
							<label for="email"><b>New Password:-</b></label>
							<input type="password" name="pass" class="form-control" placeholder="Enter New Password">
						</div>

						<div class="form-group" align="left">
							<label for="email"><b>Confirm New Password:-</b></label>
							<input type="password" name="pass1" class="form-control" placeholder="Confirm new Password">
						</div>	

						<button type="submit" name="enter" class="btn btn-success" style="width: 100%;">Change Password</button>




				</div>	
	</div>	
</body>
</html>


<?php
	include('../conn.php');

if(isset($_POST['enter'])){

	$password = $_POST['pass'];
		$sql ="UPDATE user SET p1='$password', p2='$password' WHERE id = '$_SESSION[id]'";
		$data = mysqli_query($con, $sql);
		if($data){
			?>
				$_SESSION['pwd'] = $password;
				<script type="text/javascript">
					alert('Your Password Has been Changed!');
					window.location ="home.php";
				</script>
			<?php
		}	

}



?>