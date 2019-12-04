<?php
session_start();
 include('../conn.php'); 
if(isset($_SESSION['user'])){

}
else{
    header('location: duplicateuser.php');
} 
?>


<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <script src="../css/icon.js" type="text/javascript" charset="utf-8" async defer></script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2 align="center">Checkout Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:navy;"></i>
              <i class="fab fa-cc-amex" style="color:blue;"></i>
              <i class="fab fa-cc-mastercard" style="color:red;"></i>
              <i class="fab fa-cc-discover" style="color:orange;"></i>
              <i class="fab fa-cc-paypal" style="color: darkblue;"></i>
            </div>
            <label for="cname"> Name on Card </label>
            <input type="text" id="cname" name="cardname" placeholder="Card Name">

            <label for="cname"><i class="fas fa-credit-card"></i>  Use Credit Card</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="Enter your card number"
               maxlength="16" minlength="16">

            <label for="cname"> E-mail </label>
              <input type="text" id="ccnum" name="email" placeholder="E-mail">


          
            <label for="cname"> Valied Upto </label>
            <div class="row">
              <div class="col-50">
                <input type="text" id="expmonth" name="expmonth" placeholder="MM" maxlength="2" minlength="2">
              </div>
              <div class="col-50">
                <input type="text" id="expyear" name="expyear" placeholder="YY" maxlength="2" minlength="2">
              </div>
            </div>

            <label for="cname"> CVV Code </label>
            <div class="row">
              <div class="col-50">
                <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="3" minlength="3">
              </div>
            </div>
            </div>
          </div> 
        </div>
       
       <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> -------------- same as personal information
        </label> -->
        <input type="submit" name="enter" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>

<?php

if (isset($_POST['enter'])) {


  $name = $_POST['cardname'];
  $cnumber = $_POST['cardnumber'];
  $mm = $_POST['expmonth'];
  $yy = $_POST['expyear'];
  $cvv = $_POST['cvv'];

  
  $sql = "INSERT INTO test (Name_on_card,Card_number,exp_month,exp_yeat,cvv) VALUES ('$name','$cnumber','$mm','$yy','$cvv')";
?>

<script>
  window.location.href = 'myorders.php';
</script>

<?php
  


}

?>
</body>
</html>
