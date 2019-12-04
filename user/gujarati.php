<?php

  session_start();
  include('../conn.php'); 
    include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>User Order Page</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <style>

header{
   background: linear-gradient(to bottom right, white 50%, blue 50%);
   height: 200px;
   width: 100%;
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
  letter-spacing: 10px;
}
.sactive{
    margin-top: 30px;
    color: black;
    background: White;
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

</style>
</head>


<body>
<br><br>
  <header>
    <div style="text-align: center;">
    <img src="image/foodzone-logo-without-shadow.png">
    </div>
  </header>
<div class="bt" style="background-color:black;">
  <button type="submit" name="All" class="btn1 btn" style=" width: 10%;" onclick="window.location.href='home.php'">All</button>
  <button type="submit" name="login" class="sactive btn" style="width:10%;" onclick="window.location.href='gujarati.php'">Gujarati</button>
  <button type="submit" name="login" class="btn1 btn" style="width: 15%;" onclick="window.location.href='south.php'">South Indian</button>
  <button type="submit" name="login" class="btn1 btn" style=" width: 10%;" onclick="window.location.href='chinese.php'">Chinese</button>
  <button type="submit" name="login" class="btn1 btn" style=" width: 13%;" onclick="window.location.href='fastfood.php'">Fast Food</button>
</div>


<div class="main">

<?php

  $result = mysqli_query($con,"SELECT * FROM dishes WHERE dish_catagory = 'Gujarati' ");echo "<br>";
  while($row = mysqli_fetch_array($result))
  {

?>

<a href="item_detail.php?did=<?php echo $row['id'] ?>" style="color: white;">
  <div class="column" style="background-color:black;">
    <img src="../<?php echo$row['dish_image'];?>" height="60%" width="100%">
    <p><?php echo $row['dish_price']; ?></p>
    <p><?php echo $row['dish_name']; ?></p>
  </div> 

 </a>  



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


</body>
</html>