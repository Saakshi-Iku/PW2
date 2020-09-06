<!DOCTYPE html>
<html>
	<head>
 		<title></title>
 		<link rel="stylesheet" href="header.css"> 
 	</head>
	<body>

		<header>
			<nav>
				<a href="#">
					<!--<img src="img/logo.jpg" alt="logo">-->
				</a>
				<ul>
					<div class="tab">
						<a href="header.php">Login</a>
						<a href="about.php">About</a>
						<a href="home.php">Logout</a>
						<a href="profile.php">My Profile</a>
						<a href="help.php">Help</a>
						<a href="signup.php">Signup</a>
						<a href="book.php">Book a ride</a>


					<!--<li><a href="index.php">Login</a></li>
					<li><a href="signup.php">Sign up</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#">Booking</a></li>
					<li><a href="help.php">Help</a></li>
					<button class="tablinks" onclick="Login()">Login</button>
  					<button class="tablinks" onclick="Signup()">Sign up</button>
  					<button class="tablinks" onclick="Logout()">Logout</button>
					<button class="tablinks" onclick="About()">About</button>
					<button class="tablinks" onclick="Help()">Help</button>
					<button class="tablinks" onclick="Profile()">My Profile</button>-->
					</div>
				</ul>
					<div>
						<form action="includes/login.inc.php" method="post">
							<p>User I'd or Email</p>
							<input type="text" name="mailuid" placeholder="User I'd or Email">
							<p>Password</p>
							<input type="password" name="Password" placeholder="Password"><br><br>
							<button type="submit" name="login-submit">Login</button>
							
						</form> -->
						<a href="signup.php">Sign up</a> 
						<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Log out</button>
						</form>
					</div>

			</nav>
<script >
  function About() {
    location.href="about.php";
  }

  function Signup() {
    location.href="signin.html";
  }
</script></body>
</html>