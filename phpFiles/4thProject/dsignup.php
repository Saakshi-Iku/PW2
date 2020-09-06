<?php
	//require "header.php";
?> 
<head>
	<link rel="stylesheet" type="text/css" href="header.css"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
		<main>
			<div class="loginbox">
				<!--<section class="section-default">-->
					<h2>Signup (Driver)</h2>
					<?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo '<p class="signuperror">Fill in all the fields!</p>';
						}
						else if ($_GET['error'] == "invalidmailuid") {
							echo '<p class="signuperror">Invalid userid and email!</p>';

						}
						else if ($_GET['error'] == "invalidmailfull-name"){
							echo '<p class="signuperror">Invalid name and email!</p>';

						}
						else if ($_GET['error'] == "invaliduidfull-name"){
							echo '<p class="signuperror">Invalid userid and name!</p>';

						}
						else if ($_GET['error'] == "invalidmobile"){
							echo '<p class="signuperror">Invalid mobile number!</p>';

						}
						else if ($_GET['error'] == "invalidmail"){
							echo '<p class="signuperror">Invalid mail Id!</p>';

						}
						else if ($_GET['error'] == "invaliduid"){
							echo '<p class="signuperror">Invalid User Id</p>';

						}
						else if ($_GET['error'] == "invalidfull-name"){
							echo '<p class="signuperror">Invalid Name!</p>';
						}
						else if ($_GET['error'] == "passwordcheck"){
							echo '<p class="signuperror">Passwords do not match!</p>';
						}
						else if ($_GET['error'] == "usertaken"){
							echo '<p class="signuperror">This Driver Id is already taken!</p>';
						}
						/*else{
							echo '<p class="signuperror">Cannot signup!</p>';
						}*/
					}
					else if (isset($_GET['signup']) == "success"){
						echo '<p class="signupsuccess">Signup successfull!</p>';
					}
					?>
					<form class="form-signup" action="includes/dsignup.inc.php" method="post">
						<p>Driver I'd</p>
						<input type="text" name="uid" placeholder="Driver I'd"><br>
					
						<p>First name</p>					
						<input type="text" name="firstname" placeholder="First name"><br>
						<p>Last name</p>					
						<input type="text" name="lastname" placeholder="Last name"><br>
						<p>Email I'd</p>
						<input type="email" name="mail" placeholder="Email"><br>
						<p>Mobile no.</p>
						<input type="number" name="mobile" placeholder="Mobile no."><br>
						<p>License no.</p>
						<input type="text" name="license" placeholder="Vehicle no."><br>
						<p>Password</p>
						<input type="password" name="pwd" placeholder="Password"><br>
						<p>Confirm Password</p>
						<input type="password" name="pwd-repeat" placeholder="Confirm Password"><br>
						<button type="submit"  name="signup-submit">Signup</button><br>
						<a href="header.php">&nbsp Already have an account?</a>

						
					</form>

				</section>
			</div>
		</main>

<?php
	require "footer.php";
?>