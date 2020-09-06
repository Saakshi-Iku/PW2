<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
 		<title></title>
 		<link rel="stylesheet" type="text/css" href="header.css"> 
 	</head>
	<body>

		<header>
			<!--<nav>-->
				<a href="index.php">
					<!--<img src="img/logo.jpg" alt="logo">-->
				</a>
				<ul>
					<div class="tab">
						<a href="header.php">Login</a>
						<a href="about.php">About</a>
						<!--<a href="home.php">Logout</a>-->
						<a href="profile.php">My Profile</a>
						<!--<a href="help.php">Help</a>-->
						<a href="signup.php">Signup (user)</a>
						<a href="dsignup.php">Signup (driver)</a>

						<a href="book.php">Book a ride</a>


					
					</div>
				</ul>
					<!--<div>-->
						<div class = "loginbox1">
							<?php
							if (isset($_SESSION['userid'])) {
							echo '<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Log out</button>
							</form>';
						
						}
						else {
							echo '<form action="includes/login.inc.php" method="post">
							<h1>Login here(user)</h1>
							<p>User I\'d or Email</p>
							<input type="text" name="mailuid" placeholder="User I\'d or Email">
							<p>Password</p>
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="login-submit">Login</button><br><br>
							</form>
							<a href="password.php">Forgot password?</a><br><br>
							<a href="signup.php">Don\'t have an account?</a>';
							

						}
						?>
						</div>

							
						
						
					<!--</div>

			</nav>-->
<script >
  function About() {
    location.href="about.php";
  }

  function Signup() {
    location.href="signin.html";
  }
</script></body>
</html>