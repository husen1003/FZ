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
      	var pass1 = document.myForm.pass1.value;

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


         if( document.myForm.pass.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.pass.focus() ;
            return false;
         }

		if(!document.myForm.pass.value.match(decimal)) 
		{ 
			alert('Password must be 8-15, which have contains Atleast 1 uppercase, 1 lowercase and 1 special character')
			return false;
		}

         if( document.myForm.pass1.value == "" ) {
            alert( "Please Confirm Your Password!" );
            document.myForm.pass1.focus() ;
            return false;
         }      
		if (pass != pass1) {
			 alert("Passwords are not matched");
			 return false; 
		}            
         
         return( true );
      }

</script>


	<title>User Registration</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

<style>
	body{
		background-color:red;
		margin: 0px;
		padding: 0px;

	}
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

	?>
	<div style="background: url(image/besan-dhokla.jpg); background-size:100% 100%; padding-top: 50px; padding-bottom: 100px;" >
<br><br><br>

<center>
<form action="reg.php" name="myForm" method="POST" accept-charset="utf-8" style="width: 50%" onsubmit="return(validate());">
	

		<div class="form shadow-lg p-4" style="color: black;">
			
				<center><h1><b>Registration</b></h1></center>
			
		
		
				<div class="form-group" align="left">
					<label><b>Username:-</b></label>
					<input type="text" name="uname" minlength="3" class="form-control" placeholder="Enter Name" autocomplete="off" class="form-control">
				</div>


				<div class="form-group" align="left">
					<label><b>Mo Number:-</b></label>
					<input type="text" name="mo" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" placeholder="Enter only numeric digits" autocomplete="off" class="form-control">
				</div>



				<div class="form-group" align="left">
					<label><b>Email:</b></label>
					<input type="text" name="email" class="form-control" placeholder="Enter email" autocomplete="off">
				</div>



			<div class="form-group" align="left">
				<label><b>Password:-</b></label>
				<input type="password" name="pass" class="form-control" placeholder="Enter Password">
			</div>



			<div class="form-group" align="left">
				<label><b>Confirm Password:-</b></label>
				<input type="password" name="pass1" class="form-control" placeholder="Confirm Password">
			</div>



				<button type="submit" name="login" class="btn btn-success" style="width: 100%;">Register</button>
				<br><br>
				<a href="login.php" title="Login Here" style="float: left;">Already Registered!! Login Here.</a>
				<br>


		</div>
	</form>
</form>

</center>

</div>
</body>
</html>

<?php

if (isset($_POST['login'])) {
/*


include('conn.php');


/*
	if(!$con){
		echo "Connection Failed";
	}
	if(!mysqli_select_db($con, 'my')){
		echo "Not Connected";
	}

$name = $_POST['uname'];
$mo = $_POST['mo'];
$email = $_POST['email'];
$p1 = $_POST['pass'];
$p2 = $_POST['pass1'];


$sql = "INSERT INTO user (name,mo,email,p1,p2) VALUES ("$name","$mo","$email","$p1","$p2");


}

*/



include('conn.php');


	$name = $_POST['uname'];
	$mo = $_POST['mo'];
	$email = $_POST['email'];
	$p1 = $_POST['pass'];
	$p2 = $_POST['pass1'];

	$check = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' || mo = '$mo'");
	$n = mysqli_num_rows($check);
	if($n == 1){
		?>
		<script>
			alert('Mobile number or E-mail address already exixsts');
		</script>
		<?php
	}
	else{


	
	$sql = "INSERT INTO user (name,mo,email,p1,p2) VALUES ('$name','$mo','$email','$p1','$p2')";
	
	if(!mysqli_query($con, $sql)){
	echo "Data not inserted.";
	}
/*	else{
		echo "<body bgcolor=lightgreen color=red>		<br>
		<h1><center>
		Data inserted Successfully.
		</center></h1>
		</body>";
	}*/
?>
	<script >
		window.location="login.php";
	</script>
<?php
}
}

include('footer.php');
?>