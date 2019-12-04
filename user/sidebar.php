<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.8);
  overflow-x: hidden;
  transition: 0.6s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 2px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 30px;
  color: silver;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: red;
  text-decoration: none;
}

.overlay .closebtn {
  position: absolute;
  top: 10px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  <a href="userprofile.php"><i class="fas fa-user-alt"></i>  My Account  </a>
  <a href="myorders.php"><i class="fab fa-first-order"></i>  My Orders  </a>
  <a href="changepwd.php"><i class="fas fa-key"></i>  Change Password  </a>
  <a href="#contact"><i class="far fa-address-card"></i>  Contact  </a>
  <a href="../logout.php"><i class="fas fa-sign-out-alt"></i>  Logout  </a>
  </div>
</div>



<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: silver;
  display: block;
}

.sidenav a:hover {
  color: red;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="userprofile.php">My Account</a>
  <a href="myorders.php">My Orders</a>
  <a href="changepwd.php">Change Password</a>
  <a href="#contact">Contact</a>
  <a href="../logout.php">Logout</a>
</div>

   
</body>
</html> -->
