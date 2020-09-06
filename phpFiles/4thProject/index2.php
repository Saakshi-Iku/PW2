<?php
	//require "header.php";
?>


<main>
	<!--<div class="wrapper-main">-->
<section class="section-default">
<?php
	if (isset($_SESSION['userid'])) {
	?>	
	<html>
	<head>
	<title>Booking page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script type="text/javascript">
	function validate()
	{
	 var pickup=document.getElementById("pickup");
	 var drop=document.getElementById("drop");

	 if (pickup.value.trim() =="" )
	 {
	  alert("Pickup location cannot be blank!");
	  return false;
	 }
	else if (drop.value.trim() =="" )
	 {
	  alert("Drop location cannot be blank!");
	  return false;
	 }
	else if (pickup.value==drop.value)
	 {
	  alert("Pickup and drop location cannot be same");
	  return false;
	 }
	else
	{
	 return true;
	}
	}
	</script>
	<link rel="stylesheet" type="text/css" href="booking.css">
	<style>
	body {
	  background-image: url("bg1.png");
	  background-repeat: repeat;
	  
	}

	.btn{

		background-color: #ffc107;
		border-radius: 20px;

	}
	</style>
	<body>
		<div class="booking">
			<img src="auto.jpg" class="auto">
			<form action="./swipeScreen.php"  method="POST" onclick="return validate()">
				<p>Pickup from</p>
					<input type="text" id="pickup" name="pickup" placeholder=" Enter pickup location">
				<p>Where to?</p>
					<input type="text" id="drop" name="drop" placeholder=" Enter drop location"><br><br>

					<input type="hidden" id="userid" name="userid" 
					value="<?php $_SESSION['userid'] ?>"><br><br>
				<button type="submit" class="btn btn-lg">Make yourself Available!</button>

			</form>
		</div>
	</body>
	</head>
	</html>

	<?php 	
	}
	else {
		echo '<p class="login-status">You are logged out!!</p>';

	}



	?>
	
</section>
	<!--</div>-->
</main>


<?php
	require "footer.php";
?>