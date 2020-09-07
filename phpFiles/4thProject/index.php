<?php
	session_start();
?>


<main>
	<!--<div class="wrapper-main">-->
<section class="section-default">
	<?php
		if (isset($_SESSION['userid'])) {
			$session_userid =$_SESSION['id'];?>

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
				margin-top: 40px;
			}


			#textcnt
			{
			  font-size: 40px;
			  color:#000;
			}

			#pickup
			{
				border-color: #696969;
				 border-width: 2px;
				 border-style: solid;
				 background: transparent;
				 outline: none;
				 color: #696969;
				 height: 40px;
				 color:#fff;
				 font-size: 18px;
				 border-radius: 10px;
				 padding: 0 10px;

			}
			
			select{
				color:#696969;
			}

			.tab {
			  overflow: hidden;
			  border: none;
			  /*background-color: #1a1a1a;*/
			  background-color:  rgba(0.5,0.5,0.7,0.9);
			  margin:0px;
			  height:45px;

			}

			#home{
			float:left;
			padding-top: 0px;
			}

			.tab button {
			  background-color: inherit;
			  float: right;
			  border: none;
			  outline: none;
			  cursor: pointer;
			  padding: 14px 16px;
			  transition: 0.3s;
			  font-size: 17px;
			  color:#fff;
			}

			select > option {
				background: rgba(0.5,0.5,0.7,0.9);
			    border:2px solid #696969;
			    border-radius: 5px;
			    height: 10px;
			    color: #696969;
			}

			.tab button:hover {
			  background-color: #fdec00;
			}


			.tab button.active {
			  background-color: #66ff33;
			}

			.tabcontent {
			  display: none;
			  padding: 6px 10px;
			  border: 1px solid #ccc;
			  border-top: none;
			}

			.fa{
				color:white;
			}
			</style>
			<body>





				<div class="tab">
				
				
					<a href="./includes/logout.inc.php" style="text-decoration: none">
						<button class="tablinks" >Logout </button>
					</a>
				
				
					<!-- <a href="dlogin.php" style="text-decoration: none"> -->
					<form action="../profile.php" method="POST">
						<button class="tablinks" >
							<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
						Profile
						</button>
						<input type="hidden" id="userid" name="userid" 
							value="<?php echo$session_userid?>">
					</form>
						
					<!-- </a> -->
				
				
					<!-- <a href="signup.php" style="text-decoration: none">
						<button class="tablinks" >Sign-up</button>
					</a>
				
				
					<a href="dsignUp.php" style="text-decoration: none">
						<button class="tablinks"  >Driver Sign-Up</button>
					</a> -->

					<a href="" style="text-decoration: none;padding-top: 0px;">
						<button class="tablinks"  id="home" >Home</button>
					</a>
				
			</div>


<!--  -->

				<div class="booking">
					<img src="car1.png" class="auto">
					<form action="../swipeScreen.php"  method="POST">
						<p>Pickup from</p>
							<select id="pickup" name="pickup" placeholder=" Enter pickup location">
								<option disabled="disabled" selected="selected">Choose pick up location</option>
		  						<option value="METRO">National College Metro Station</option>
		  						<option value="RKA">Ramakrishna Ashram</option>
		  						<option value="BMS">BMS College of Engineering</option>
		  						<option value="BMS">BMS College of Architecture</option>
		  						<option value="BMS">BMS College of Law</option>
  							</select>
							<!-- <input type="text" id="pickup" name="pickup" placeholder=" Enter pickup location"> -->
						<p>Where to?</p>
							<!-- <input type="text" id="drop" name="drop" placeholder=" Enter drop location"> -->
							<select id="pickup" name="drop" placeholder=" Enter pickup location">
								<option disabled="disabled" selected="selected">Choose drop location</option>
		  						<option value="METRO">National College Metro Station</option>
		  						<option value="RKA">Ramakrishna Ashram</option>
		  						<option value="BMS">BMS College of Engineering</option>
		  						<option value="BMS">BMS College of Architecture</option>
		  						<option value="BMS">BMS College of Law</option>
  							</select>
							<input type="hidden" id="userid" name="userid" 
							value="<?php echo$session_userid?>"><br><br>
						<button type="submit" onclick="return validate()" class="btn btn-lg">Make yourself Available!</button>

					</form>
				</div>
			</body>
			</head>
			</html>


		<?php }
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