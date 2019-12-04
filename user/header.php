<?php
include('sidebar.php');
if(isset($_SESSION['user'])){
}
else{
    header('location: duplicateuser.php');
} 

?>


<!DOCTYPE html>
<html>
<head>
	<title> </title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style type="text/css" media="screen">

body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}
#navbar {
  overflow: hidden;
  background-color: black;
}

#navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:17px;
}

#navbar a:hover {
  background-color: red;
  color: grey;
}

#navbar a.active {
  background-color: green;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
  #loading{
    position: fixed;
    width: 100%;
    height: 100vh;   /* vertical height */
    background: #fff
    url('../image/foodzone.gif') no-repeat center;
    z-index: 99999;
  }
 

  </style>
</head>
<body onload="loader()">

  <div id="loading">
    
  </div> 
<div id="navbar">
  <a onclick="openNav()" class="button16"><span style="font-size:17px;cursor:pointer"><i class="fas fa-align-justify"></i></span></a>
  <a href="home.php" class="nav-link button15 <?php if(basename($_SERVER['PHP_SELF'])=="home.php"){echo "active";}else{echo "";} ?>"><i class="fa fa-home" aria-hidden="true"></i>  Home  </a>
  <a href="userprofile.php" class="nav-link button15 <?php if(basename($_SERVER['PHP_SELF'])=="userprofile.php"){echo "active";}else{echo "";} ?>"><i class="far fa-user-circle"></i> My Account</a>
  <a href="myorders.php" class="nav-link button15 <?php if(basename($_SERVER['PHP_SELF'])=="myorders.php"){echo "active";}else{echo "";} ?>"><i class="fab fa-first-order"></i> My Orders</a>  
  <a href="../logout.php" style="float: right;" class="button15"><i class="fas fa-sign-out-alt"></i>  Logout  </a>
  <a href="viewcart.php" style="float: right;" class="button15"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
</div>




 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> 




<script>
  var preloader = document.getElementById('loading');
  function loader() {
    preloader.style.display = 'none';
  }
</script>

</body>
</html>