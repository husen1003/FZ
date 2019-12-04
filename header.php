<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <script src="css/icon.js" type="text/javascript" charset="utf-8" async defer></script>  
  <style>
    


body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

  #loading{
    position: fixed;
    width: 100%;
    height: 100vh;   /* vertical height */
    background: #fff
    url('image/foodzone.gif') no-repeat center;
  }
.button1 {
  color: rgba(255,255,255,1);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  position: relative;
}
.button1 a{
  color: rgba(51,51,51,1);
  text-decoration: none;
  display: block;
}
.button1:hover {
  background-color: rgba(255,255,255,0.2);
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
  border-radius: 25px;  
}  

.header {
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: black;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: orange;
  color: black;
}

#navbar a.active {
  background-color: yellow;
  color: black;
  border-radius: 25px;
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

<!--  <style type="text/css" media="screen">
  button : hover{
      border: dotted 4px;
    }  
        nav{
      height: 100px;
      box-shadow: 15px 15px 15px 15px darkgrey;
    }
    button{
      box-shadow: 2px 2px 2px 3px darkgrey;

    }
  </style>-->
</head>
<body onload="loader()">

    <div id="loading">
    
  </div>
<!--<nav class="navbar navbar-expand-md bg-white navbar-primary">
    <div class="container-fluid"> 
    <h1 style="color: ghey;">FOOD ZONE</h1>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
      <span class="navbar-toggler-icon"></span>

    </button>-->


  <h2 style="background-color: rgba(0,0,0,0.9); margin-bottom: 0; text-align: center;"> <b><font color="red" face="Footlight MT"> FOO<span onclick="window.open('admin')">D</span> ZONE </font></b></h2>

</div>
<div id="navbar" class="menu">
  <a class="sim-button button1  nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";}else{echo "";} ?>" href="/fz"><i class="fa fa-home" aria-hidden="true"></i>  Home </a>
  <a class="sim-button button1  nav-link <?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";}else{echo "";} ?>" href="contact.php"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Us</a>
  <a class="sim-button button1 nav-link <?php if(basename($_SERVER['PHP_SELF'])=="about.php"){echo "active";}else{echo "";} ?>" href="about.php"><i class="fa fa-sign-in" aria-hidden="true"></i> About</a>

     <a class="sim-button button1 <?php if(basename($_SERVER['PHP_SELF'])=="reg.php"){echo "active";}else{echo "";} ?>" href="reg.php" style="float: right;"><i class="fa fa-users" aria-hidden="true"></i> Register</a> 
   <a class="sim-button button1 <?php if(basename($_SERVER['PHP_SELF'])=="login.php"){echo "active";}else{echo "";} ?>" href="login.php"  style="float: right;"><i class="fas fa-user-circle"></i> login</a>
 
</div>


<!-- <script>
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
</script> -->

  <!--  <ul  class="navbar-nav">
	
      <li class="nav-item navbar navbar-primary mr-sm-1">
        <button class="btn btn-success bg-secondary" onclick="window.location.href='../FZ'">
            Home
        </button> 
      </li>
	
      <li class="nav-item navbar navbar-primary mr-sm-1">
        <button class="btn btn-success bg-secondary" onclick="window.location.href='Contact.php'">
            Contact Us
        </button> 
      </li>



	    <li class="nav-item navbar navbar-primary mr-sm-1">
       <button class="btn btn-success bg-secondary" onclick="window.location.href='about.php'"> 
        About
       </button> 
      </li> 

</ul>
<button class="btn btn-success bg-danfer" class="p"  onclick="window.location.href='login.php'">
        <div style="float: right;">Login</div>  
</button>



<button class="btn btn-info bg-danger" class="p" onclick="window.location.href='reg.php'">
        <div style="float: right;">Register</div>  
</button>
  </div> 
 </div>

</nav>
-->

<script>
  var preloader = document.getElementById('loading');
  function loader() {
    preloader.style.display = 'none';
  }
</script>


</body>
</html>