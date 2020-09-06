<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title></title>
	<style >
		
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
			 height: 470px;
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
			 padding: 5px;
			}

			.loginbox1 input[type="text"], input[type="number"], input[type="password"], input[type="email"]
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
			  margin-top: 10px;
			}

			.loginbox1 button[type="submit"]:hover
			{
			 cursor: pointer;
			 background: yellow;
			 color: #000;
			 margin-top: 10px;
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
			 margin-top: 10px;
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


	<div class = "loginbox1">
							<?php
							if (isset($_SESSION['userid'])) {
							echo '<form action="includes/logout
							.inc.php" method="post">
							<button type="submit" name="logout-submit">Log out</button>
							</form>';
						
						}
						else {
							echo '<form action="includes/login.inc.php" method="post">
							<h1>Login here (user)</h1><br><br>
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




</body>
</html>


