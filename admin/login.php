<?php

     session_start();
     if (isset($_SESSION['admin'])) {
          header('location: ../admin');

     }



?>


<html>
<head>
  <title> Admin Login </title>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>

<body>

    <br><br>
 <div class="container">

  	<h2 align="center"> Admin Login </h2><br><br>

    <center>
    <form method="POST" style="width: 40%">
      <div class="form-group" align="left">

         <label><b>Username:</b></label>
        <input type="User" name="uname" id="Username" required="required" placeholder="Enter Username" class="form-control" autocomplete="off">

        <br>


       <label><b> Password </b></label></h3>
        <input type="password" name="pass" id="password" required="required" placeholder="password" class="form-control">

        <br>

        <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
  

      <button type="submit" name="login" class="btn btn-primary" style="width: 100%;"> LOGIN </button>

    </div>
    </form>
  </center>
 
</body>

</html>

<?php
include("../conn.php");
if(isset($_POST['login']))
{


$a = $_POST['uname'];
$b = $_POST['pass'];
$result = mysqli_query($con," SELECT * FROM admin WHERE uname='$a' and 
  pass='$b'");
$n = mysqli_num_rows($result);
if($n != 1)
{
  ?>
  <script>
      alert('Incorrect Username Or Password!!');
      windows.open(login.php);
  </script>
   
  <?php
}
else
{

     $row = mysqli_fetch_array($result);
     $_SESSION['admin'] = $row['uname'];
      header('location:../admin');
     //echo $_SESSION['user'];


}

}

?>