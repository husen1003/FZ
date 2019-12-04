<?php
	session_start();


	$id = $_GET['id'];
	$qty = $_GET['qty'];

	If(isset($_SESSION['dishcart'])){

		$currentNo = $_SESSION['counter']+1;

		$_SESSION['dishcart'][$currentNo] = $id;

		$_SESSION['qtycart'][$currentNo] = $qty;

		$_SESSION['counter'] = $currentNo;

	}
	else{
		$dishcart = array();

		$qtycart = array();



		$_SESSION['dishcart'][0] = $id;

		$_SESSION['qtycart'][0] = $qty;

		$_SESSION['counter'] = 0;
	}
?>

<script>
	window.location = 'viewcart.php';
</script>

<?php


?>