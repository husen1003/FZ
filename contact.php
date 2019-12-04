<?php
	include("header.php");
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

     

      	var mnumber = /^\d{10}$/;					/*Variable for 10 digit mobile number only*/

		if( document.myForm.mnumber.value == "" ) {
            alert( "Please provide your Mobile Number!" );
            document.myForm.mnumber.focus() ;
            return false;
         }  

         
         return( true );
      }

</script>


	<title>Contact Us</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<style>

input[type=text],input[type=email], select, textarea,input{
  width: 100%;
  padding: 12px;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
	margin-top: 10px;
  background: #0005;
  background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

.container {
  border-radius: 10px;
  background: #0009;
  padding: 20px;
  box-shadow: 3px 2px 2px 2px black;
  letter-spacing: 1px;
}
label{
  color: white;
}

</style>

</head>
<body>
  <div style="background: url(image/coffee.jpg); background-size:100% 100%;padding-top: 50px; padding-bottom: 50px;">

<div class="container" style="width: 50%;">
  <form action="contact.php" method="POST" >
  	<h1 style="color: white; text-align: center;"><u>Contact Us</u></h1>



    <label><b>Name :-</b></label>
    <input type="text" id="fname" name="name" placeholder="Enter your Name" autocomplete="off" required > 

    <label><b>Email :-</b></label>
    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off"  required>

    <label><b>Mobile Number :-</b></label>
    <input type="text" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" id="mnumber" name="mo" placeholder="Mobile Number" autocomplete="off"  required>

    <label><b>Subject :-</b></label>
    <input type="text" id="lname" name="subject" placeholder="Enter subject" autocomplete="off"  required>    

    <label><b>Massege:-</b></label>
    <textarea id="subject" name="msg" placeholder="feedback" style="height:200px" autocomplete="off"  required>
    </textarea>

    <input type="submit" value="Submit" name="enter">
  </form>
</div>




</div>



</body>
</html>
<?php

if (isset($_POST['enter'])) {


include('conn.php');


  $name = $_POST['name'];
  $mo = $_POST['mo'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];

  
  $sql = "INSERT INTO contact (name,mo,email,subject,msg) VALUES ('$name','$mo','$email','$subject','$msg')";
  if(mysqli_query($con, $sql)){
      header('index.php');
  }
  


}

include('footer.php');
?>