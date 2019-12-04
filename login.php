<?php

     session_start();
     if (isset($_SESSION['user'])) {
          header('location: user/home.php');
     }
?>
<html>
<head>
  <title> Login Form </title> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<style>

  body{
    background-color:red;
    margin: 0px;
    padding: 0px;
  }
.form{

      background: #0009;
}
button{
   background: white;
   border: 1px solid silver;
   padding: 2px;
   border-top-right-radius: 4px;
   border-bottom-right-radius: 4px;
}
button:focus,input:focus {
  outline:none;

}


</style>




</head>

<body>




  <?php
  include("header.php");
  ?>


  


 <div style="background: url(image/Sweets_Ice_cream_Fruit_Ice_Multicolor.jpg); background-size: 100% 100%; padding-top: 100px; padding-bottom: 100px;">


    <center>
    <form action="login.php" method="POST" style="width: 50%;" >
      <div class="form shadow-lg p-4" style="color: black;">

    <h2 align="center" style="color: white;"> User Login </h2><br><br>
      <div class="form-group" align="left">

        <label style="color: white;"><b>Email:-</b></label>
        <input type="text" name="email" id="Username" required="required" placeholder="Enter Email" class="form-control" autocomplete="off">

        <br>

<script>
   function password(){
    var pas= document.getElementById('password');
    if(pas.type == "text")
      pas.type = "password";
    else
      pas.type = "text";

   }
</script>


       <label style="color: white;"><b> Password:- </b></label></h3>
        <input type="password" name="pass" id="password" required="required" placeholder="password" class="form-control" autocomplete="off">
</script>

        <br> <br>

  



      <button type="submit" name="login" class="btn btn-primary" style="width: 100%"> LOGIN </button><br><br>
      <a href="reg.php" title="Register from here">If not registered, Sign Up!!</a>     
      <a href="forgot_pass.php" style="float: right;">Forgot Password</a>
    </div>
    </form>
  </center>
 </div>
</body>

</html>

<?php
include("conn.php");
if(isset($_POST['login']))
{


$a = $_POST['email'];
$b = $_POST['pass'];
$result = mysqli_query($con," SELECT * FROM user WHERE email='$a' and 
  p1='$b'");
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
     $_SESSION['id'] = $row['id'];
     $_SESSION['user'] = $row['name'];
     $_SESSION['mo'] = $row['mo'];
     $_SESSION['email'] = $row['email'];
     $_SESSION['pwd'] = $row['p1'];
     $_SESSION['login_time'] = time();
     ?>
     <script>
        window.location="user/home.php";

    </script>
    <?php
}

}
include('footer.php');
?>