<?php

  include('../conn.php');


  if(isset($_SESSION['admin'])){
    
  }
  else{
    header('location: login.php');  
  }
?>

<?php include('slidebar.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>

  <style>

  #loading{
    position: fixed;
    width: 100%;
    height: 100vh;   /* vertical height */
    background: #fff
    url('../image/foodzone.gif') no-repeat center;
    z-index: 99999;
  }


body {
  margin: 0;
  font-size: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

.header {

  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: orange;
}

#navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 17px;
  margin-bottom: 0;
  margin-top: 0;
}

#navbar a:hover {
  background-color: gold;
  color: black;
}

#navbar a.active {
  background-color: black;
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
</style>


</head>
<body onload="loader()">

  <div id="loading">
    
  </div>  

<div class="header" style="background-color: rgba(0,0,0,0.9); color: red;">
  <h3>Hello <?php echo $_SESSION['admin']; ?> </h3>
</div>

<div id="navbar" class="menu">
  <a onclick="openNav()"><span style="font-size:17px;cursor:pointer;"><i class="fas fa-align-justify"></i></span></a>
  <a class="<?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";}else{echo "";} ?>"  href="../admin"><i class="fa fa-home" aria-hidden="true"></i>  Home  </a>
  <a href="showuser.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="showuser.php"){echo "active";}else{echo "";} ?>"><i class="fas fa-users"></i>  Show User  </a>
  <a href="Showadmin.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="Showadmin.php"){echo "active";}else{echo "";} ?>"><i class="fas fa-user-tie"></i>  Show Admins  </a>
  <a href="contact.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";}else{echo "";} ?>"><i class="fas fa-comment-dots"></i> Feedbacks </a> 
   <a href="order.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="order.php"){echo "active";}else{echo "";} ?>"><i class="fab fa-first-order"></i>  Pending Orders</a>
   <a href="allorders.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="allorders.php"){echo "active";}else{echo "";} ?>"><i class="fab fa-first-order"></i>  All Orders History</a>             
 
   <a href="logout.php"  style="float: right;"><i class="fas fa-sign-out-alt"></i>  Logout  </a>
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
  //Script for preloader
  var preloader = document.getElementById('loading');
  function loader() {
    preloader.style.display = 'none';
  }
</script>
 
</body>
</html>