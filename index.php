<?php
  include("header.php");
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<style>

.bg-text{
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid ;
  position: fixed; /* Stay fixed */
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  padding: 20px;
  text-align: center;
  display: block;
  }
 .img{

    text-align: center;
  }

</style>
</head>
<body onload="loader()" style="background: linear-gradient(to bottom right, black 0, white 100%);">


  <div class="responsive">
    <img src="image/homee.jpg" style="height:450px; width: 100%;border-bottom:5px black solid;">
<div class="bg-text"> FOOD ZONE </div>
  </div>



    <div class="img">
      <img src="image/samosas.jpg" alt="these image is loading" style="width:40% ; margin-top: 5%; margin-left: 2%; height: 200px;  border:5px black solid;">
        <img src="image/paneer bhurji sandwich.jpg" alt="these image is loading" style="width:40% ; margin-top: 5%; margin-left: 2%;height: 200px;border:5px black solid;">
    </div>


    <div class="img">
      <img src="image/maxresdefault.jpg" alt="these image is loading" style="width:40% ; margin-top: 5%; margin-left: 2% ; height: 200px;border:5px black solid;" >
      <img src="image/first.jpg" alt="these image is loading" style="width:40% ; margin-top: 5%; margin-left: 2%; height: 200px;border:5px black solid;" >
    </div>


    <div class="img">
      <img src="image/peppy paneer pizza.jpg" alt="these image is loading" style="width:40% ; margin-top: 5%;margin-bottom: 5%; margin-left: 2%; height: 200px;border:5px black solid;" >
       <img src="image/Fafda-Gujarati.png" alt="these image is loading" style="width:40% ; margin-top: 5%; margin-left: 2%;margin-bottom: 5%; height: 200px;border:5px black solid;" >
    </div>

</div>
<div class="gallery">
</div>








<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <style>
        header{
      border-top:solid black;
      padding-top: 40px;
      background:black;
      width:100%;
    }
    *{
      margin : 0;padding: 0;box-sizing: border-box;

    }
    footer{
      width: 100%;
    }
  .footer_style{background: black; color:white;}
  a{
    text-decoration: none;
    color: white;
  }
  a:hover{
    text-decoration: none; color: red;
  }
    .footer_style{color:white; background: linear-gradient(to bottom, black 0, blue 100%);}
  </style>
</head>
<body>

<header>
 
</header>
<footer class="footer_style" class="container-fluid">
  <main class="container-fluid">
    <div class="row p-2">
      <div class="col-md-4 col-12 offset-md-1">
     <ul>
            <li> Phone:- </li>
             +91 9876543210 <br>
             +91 1234567890
            <li> Email:- </li>
            foodzone1111@gmail.com
          </ul>
        
      </div>
      <div class="col-md-4 col-12">
          <h4>Contact</h4>
          <ul>
            <li> Address:- </li>
              Wadhwan,Gujrat 
          </ul>
        </div>
      
      <div class="col-md-2 col-12">
        <h4>Links</h4>
        <ul>
          <li> <a href="index.php">  HOME </a></li>
          <li> <a href="contact.php">Contact us</a></li>
          <li> <a href="about.php">About us</a></li>
        </ul>        
      </div>
     </div>
    </div>
  </main>
</div>

<div style="background-color: black;background: linear-gradient(to bottom, black 0, blue 100%);">
  <!-- Copyright -->
  <div class="footer-copyright text-center text-white-50 py-2">@ 2019 Copyright:
    <a class="dark-grey-text" href="index.php"> FoodZone.com </a>
  </div>
  <!-- Copyright -->
</div>
</footer>



<script>
  
var waypoint = new Waypoint({
  element: document.getElementById('px-offset-waypoint'),
  handler: function(direction) {
    notify('I am 20px from the top of the window')
  },
  offset: 20 
})

$(document).ready(function(){

  $('').waypoint(function(direction){

  })

})


</script>


</body>
</html>


