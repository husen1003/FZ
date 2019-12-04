<?php
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forgot Password</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <script src="css/icon.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body>
	<h1 align="center">Forgot Password</h1><br>
	<center>
	<form method="POST">
		Email:- <input type="text" name="email" placeholder="Enter Email" required=""><br><br>
		<button class="btn btn-success" onclick="window.location='login.php'">Back</button>
		<input type="submit" name="login" class="btn btn-info">
	</form><br><br>
	
	</center>
</body>
</html>



<?php
include("conn.php");
if(isset($_POST['login']))
{

//$row["p1"]
		$a = $_POST['email'];
		$result = mysqli_query($con," SELECT * FROM user WHERE email='$a'");
		$n = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);

		if($n == 1){


			// Import PHPMailer classes into the global namespace
			// These must be at the top of your script, not inside a function


			// Load Composer's autoloader
			require 'vendor/autoload.php';

			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'foodzone1111@gmail.com';                     // SMTP username
			    $mail->Password   = 'FoodZone@123';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('foodzone1111@gmail.com', 'Foodzone');
			    $mail->addAddress($a, $row["name"]);     // Add a recipient
			//    $mail->addAddress('ellen@example.com');               // Name is optional
			//    $mail->addReplyTo('info@example.com', 'Information');
			//    $mail->addCC('cc@example.com');
			 //   $mail->addBCC('bcc@example.com');

			    // Attachments
			 //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'For Forgot Password';
			    $mail->Body    =  $row["p1"];
			    $mail->AltBody = 'email is $a';

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

		else
		{
		  ?>
		  <script>
		      alert('This Email is Not Exists!!');
		  </script>
		   
		  <?php
		}

}
?>