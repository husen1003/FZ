<?php

  session_start();
	include('../conn.php'); 
  include('header.php');


if(isset($_SESSION['user'])){

}
else{
    header('location: duplicateuser.php');
}   

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Order Page</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>
	<style>
    
    body{

    }
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 250px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}	
.bt{
  background:  white;
  height: 100px;
  text-align: center;
  margin-top: 20px;
  letter-spacing: 3px;
}
.sactive{
    margin-top: 30px;
    color: black;
    background: white;
    border-color: gold;
    border-width: 2px;
}
.btn1{
    margin-top: 30px;
    color: black;
    background: linear-gradient(to bottom right, white 0, orange 100%);
    border-color: gold;
    border-width: 2px;
}
.column:hover{
  color: gold;
  text-decoration: none;
}
.im:hover{
  height: 70%; 
  width: 110%;
}
.mySlides {display:none;}
</style>
</head>


<body>
    <!--  <div>
    <img src="../image/IMG_704732.jpg" style="height: 600px; width: 100%;">
    <h1> Food Zone</h1>
  </div> --> 
  <div>
    <img class="mySlides" src="../image/-1024x576.jpeg" style="width:100%; height:400px;">
    <img class="mySlides" src="../image/homee.jpg" style="width:100%; height:400px;">
    <img class="mySlides" src="../image/pizza.jpg" style="width:100%; height:400px;">
  </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>





<div class="bt" style="background-color:black; border-top: dotted white; border-bottom: dotted white; ">
  <button type="submit" name="All" class="btn1 btn" style=" width: 10%;" onclick="window.location.href='home.php'">All</button>
  <button type="submit" name="gujarati" class="btn1 btn" style="width:10%;" onclick="window.location.href='gujarati.php'">Gujarati</button>
  <button type="submit" name="south" class="btn1 btn" style="width: 15%;" onclick="window.location.href='south.php'">South Indian</button>
  <button type="submit" name="chinese" class="btn1 btn" style=" width: 10%;" onclick="window.location.href='chinese.php'">Chinese</button>
  <button type="submit" name="fastfood" class="btn1 btn" style=" width: 13%;" onclick="window.location.href='fastfood.php'">Fast Food</button>
</div>

<div class="main">

<?php

	$result = mysqli_query($con,"SELECT * FROM dishes");echo "<br>";
	while($row = mysqli_fetch_array($result))
	{

?>

<a href="item_detail.php?did=<?php echo $row['id'] ?>" style="color: white;">
  <div class="column" style="background-color:black;">
    <img src="../<?php echo$row['dish_image'];?>" height="60%" width="100%">
    <p style="border-bottom: dotted; text-align: center;"><b style="letter-spacing: 3px;font-size: 20px;"><?php echo $row['dish_price']; ?></b></p>
    <p style="border-bottom: dotted; text-align: center;"><b style="letter-spacing: 3px;font-size: 20px;"><?php echo $row['dish_name']; ?></b></p>
  </div> 
 </a>  
</div>

<?php

	}

?>



<!--
<div class="card" style="width:400px">
    <img class="card-img-top" src="../image/icons8-businessman-480.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
</div>
</div>
-->

<?php
include('footer.php');

?>
</body>
</html>

