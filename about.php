<?php
	include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <script src="css/icon.js" type="text/javascript" charset="utf-8" async defer></script> 

  <style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

</style>
</head>
<body>
	<h1 align="center">About Us</h1>


<div class="row">

  <div class="col-5">
    <center>
    <div class="card w-50">
      <img src="adminimage/hardik.jpg" alt="H.A.Sorthiya" style="width:100%;">
      <div class="container">
        <h5><i class="fas fa-user-graduate"></i>  Hardik Sorathiya</h5>
        <p class="title"> Student </p>
        <p> we create First project.</p>
        <p><i class="fas fa-envelope" style="color:red;"></i>  hardiksorthiya@gmail.com</p>
        <p><button class="button"><i class="fas fa-mobile-alt"></i> +91 9773293667</button></p>
      </div>
    </div>
    </center>
  </div>


  <div class="col-5">
    <center>
    <div class="card w-50">
      <img src="adminimage/hushen.jpg" alt=" Husen " style="width:100%">
      <div class="container">
        <h4><i class="fas fa-user-graduate"></i>  Hushen Lokhandwala</h4>
        <p class="title"> Student </p>
        <p> we create First project.</p>
        <p><i class="fas fa-envelope" style="color:red;"></i>  husenlokhandwala@gmail.com</p>
        <p><button class="button"><i class="fas fa-mobile-alt"></i> +91 00336 39263</button></p>
      </div>
    </div>
    </center>
  </div>

</div>




</body>
</html>
<?php
	include("footer.php");
?>