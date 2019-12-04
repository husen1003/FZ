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

<script type = "text/javascript">

      	function isNumberKey(evt)
      	{
         	var charCode = (evt.which) ? evt.which : event.keyCode
         	if (charCode > 31 && (charCode < 48 || charCode > 57)){
            	return false; 
            	document.getElementById("error").style.display = ret ? "none" : "inline";      
            } 
        }

      function validate() {

      	var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;		/*Variable for password*/

      	var mo = /^\d{10}$/;					/*Variable for 10 digit mobile number only*/

      	var pass = document.myForm.pass.value;		/*Variables for Compare Passwords*/

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
     
         /*       
         if (!document.myForm.mo.value(mo)) {
         	alert("Enter Valid Mobile Number");
         	document.myForm.mo.focus();
         	return false;
         }
         */
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

/*         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         */




         return( true );
      }
</script>


	<title>Update User</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

</head>



<body bgcolor="blue">

	<div class="container">
<br><br><br>

<center>
<form action="" name="myForm" method="POST" accept-charset="utf-8" style="width: 50%" onsubmit="return(validate());">
	

		
			
				<center><h1>Update User</h1></center>
			
				<div class="form-group" align="left">
					<lable><b>ID:</b></lable>
					<input type="text" value="<?php echo $_GET['id']; ?>" name="id" class="form-control" disabled>
				</div>	
		
				<div class="form-group" align="left">
					<label><b>Username:</b></label>
					<input type="text" value="<?php echo $_GET['name']; ?>" name="uname" minlength="3" class="form-control" placeholder="Enter Name" autocomplete="off">
				</div>


				<div class="form-group" align="left">
					<label><b>Mo Number:</b></label>
					<input type="text" value="<?php echo $_GET['mo']; ?>" name="mo" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" placeholder="Enter only numeric digits" autocomplete="off" class="form-control">
				</div>



				<div class="form-group" align="left">
					<label><b>Email:</b></label>
					<input type="text" value="<?php echo $_GET['email']; ?>" name="email" class="form-control" placeholder="Enter email" autocomplete="off">
				</div>



			<div class="form-group" align="left">
				<label for="email"><b>Password:</b></label>
				<input type="text" name="pass" class="form-control" placeholder="Can't change Password :(" disabled="">
			</div>


				<button type="submit" name="login"class="btn btn-success">Update</button>



</form>

</center>

</div>
</body>
</html>



<?php

if (isset($_POST['login'])){

	$id = $_GET['id'];
	$name = $_POST['uname'];
	$mo = $_POST['mo'];
	$email = $_POST['email'];


	$check = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' || mo = '$mo'");
	$n = mysqli_num_rows($check);

	if($n != 1){
		?>
		<script>
			alert('You Are Already Exist');
		</script>
		<?php
	}
	else{
	
		$sql ="UPDATE user SET name='$name' , mo='$mo', email='$email' WHERE id=$id";
		$data = mysqli_query($con, $sql);
	
		if($data){
		?>

			<script type="text/javascript">
				window.location = '../admin/showuser.php';
			</script>

		<?php
	}
	}




}



?>