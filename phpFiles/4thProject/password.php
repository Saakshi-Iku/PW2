<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 		<title>password</title>
 		<style>
 			body{
background-image: url("bg1.png");
background-repeat: repeat;
background-size: auto/*80% 150%*/;
background-position: center;
height:750px;
}
.loginbox {
 width: 360px;
 height: 560px;
 background: #000000;
 /*background: rgba(0.5,0.5,0.7,0.7);*/
 top: 53%;
 left: 50%;
 position: absolute;
 transform: translate(-50%,-50%);
 box-sizing: border-box;
 padding: 10px 30px;
 color: white;
 border-radius: 10px;
}
.loginbox1 {
 width: 360px;
 height: 450px;
 background:#000000;
 /*background: rgba(0.5,0.5,0.7,0.7);*/
 top: 52%;
 left: 50%;
 position: absolute;
 transform: translate(-50%,-50%);
 box-sizing: border-box;
 padding: 70px 30px;
 color: white;
 border-radius: 10px;
}

.loginbox1 p
{
margin: 0;
 padding: 5px;
 font-weight: normal;
 font-size: 20px;
 color:#ffc107;
}

.loginbox1 input{
 width: 100%;
 margin-bottom: 10px;
 padding: 10px;
}

.loginbox1 input[type="text"], input[type="number"], input[type="password"], input[type="email"]
{
 border-color: #696969;
 border-width: 2px;
 border-style: solid;
 background: transparent;
 outline: none;
 height: 33px;
 color:white;
 font-size: 17px;
 border-radius: 10px;
 padding: 0 5px;
}

.loginbox1 button[type="submit"]
{
  border: none;
 outline: none;
 height: 40px;
 background:#ffc107;
 color: #fff;
 font-size: 18px;
 border-radius: 20px;
 width:100%;
}

.loginbox1 button[type="submit"]:hover
{
 cursor: pointer;
 background: yellow;
 color: #000;
}

.loginbox1 a
{
 text-decoration: none;
 font-size: 15px;
 color: #ffc107;
 }

.loginbox1 a:hover
{
 color: yellow;
}

.loginbox1 h1
{
 margin:0;
 padding: 0 0 0px;
 text-align: center;
 font-size: 26px;

}


h1
{
 margin:0;
 padding: 0 0 0px;
 text-align: center;
 font-size: 20px;

}

.loginbox p
{
 margin: 0;
 padding: 3px;
 font-weight: normal;
 font-size: 15px;
 color:#ffc107;
}
.loginbox label
{
 margin: 0;
 padding: 3px;
 font-weight: normal;
 font-size: 15px;
 color:#ffc107;
}
.loginbox1 label
{
 margin: 0;
 padding: 5px;
 font-weight: normal;
 font-size: 20px;
 color:#ffc107;
}

.loginbox input{
 width: 100%;
 margin-bottom: 5px;
 padding: 5px;
}
.loginbox select{
 width: 105%;
 margin-bottom: 5px;
 padding: 10px;
}
.loginbox select
{
 border-color: #696969;
 border-width: 2px;
 border-style: solid;
 /*background: transparent;*/
 outline: none;
 height: 25px;
 color:black;
 font-size: 13px;
 border-radius: 10px;
 padding: 0 5px;
}
.loginbox1 select{
 width: 105%;
 margin-bottom: 5px;
 padding: 10px;
}
.loginbox1 select
{
 border-color: #696969;
 border-width: 2px;
 border-style: solid;
 /*background: transparent;*/
 outline: none;
 height: 25px;
 color:black;
 font-size: 13px;
 border-radius: 10px;
 padding: 0 5px;
}
.loginbox input[type="text"], input[type="number"], input[type="password"], input[type="email"]
{
 border-color: #696969;
 border-width: 2px;
 border-style: solid;
 background: transparent;
 outline: none;
 height: 23px;
 color:white;
 font-size: 13px;
 border-radius: 10px;
 padding: 0 5px;
}

.loginbox button[type="submit"]
{
 border: none;
 outline: none;
 height: 25px;
 background:#ffc107;
 color: #fff;
 font-size: 15px;
 border-radius: 10px;
 width:100%;
 left:50%;
 padding: 0 10px;
}

.loginbox button[type="submit"]:hover
{
 cursor: pointer;
 background: yellow;
 color: #000;
}

.loginbox a
{
 text-decoration: none;
 font-size: 15px;
 color: #ffc107;
 }

.loginbox a:hover
{
 color: yellow;
}


 		</style>
 	</head>
	<body>

		<header>
			<!--<nav>
				<a href="index.php">
					
				</a>
				<ul>
					<div class="tab">
						<a href="header.php">Login(user)</a>
						<a href="dlogin.php">Login(driver)</a>
						<a href="about.php">About</a>
					
						<a href="profile.php">My Profile</a>
						
						<a href="signup.php">Signup (user)</a>
						<a href="dsignup.php">Signup (driver)</a>

						<a href="book.php">Book a ride</a>


					
					</div>
				</ul> 
					<div>--> 
						<div class = "loginbox1">
							
							<form action="header.php" method="post">
							<h1>Change Password</h1><br><br>
							<p>Email I'd</p>
							<input type="text" name="mailuid" placeholder="Enter your regitered Email I'd"><br><br>
							<!--<p>Password</p>
							<input type="password" name="pwd" placeholder="Password">
							<label class="label" for="clg">Location</label><br>

						<select class="select" name="location", size="1">
  						<option value="METRO">National College Metro Station</option>
  						<option value="RKA">Ramakrishna Ashram</option>
  						<option value="BMS">BMS College of Engineering</option>
  						<option value="BMS">BMS College of Architecture</option>
  						<option value="BMS">BMS College of Law</option>
  						
						</select><br><br>-->
						
							<button type="submit" name="login-submit">Change Password</button><br><br>
							<p> Password Reset link will be sent to your mail I'd</p>
							</form>
							<!--<a href="password.php">Forgot password?</a><br><br>
							<a href="dsignup.php">Don\'t have an account?</a>';-->
							
						
						
						
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