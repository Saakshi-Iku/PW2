<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
 		<title></title>
 		<link rel="stylesheet" type="text/css" href="header.css"> 
 		<style>
body {
      margin:0px;}

html
{
  font-family: Tahoma, sans-serif;
}

#textcnt
{
  font-size: 40px;
  color:#000;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #1a1a1a;
  margin:0px;

}

#home{
float:left;
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

.tab button:hover {
  background-color: #fdec00;
}


.tab button.active {
  background-color: #66ff33;
}

.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.app-picture {
width:480px;
height:500px;
padding-right:300px;
}
#pic{
float:right;
}
.app-text{
  width:50;
}
.app-text h1{
  font-size: 40px;
  width:900px;
  position:center;
  margin-left: 300px;
  text-decoration: underline;
  word-spacing: 10px;
}
.app-text h2{
  font-size: 35px;
  width:800px;
  position:relative;
  margin-left:40px;
  text-align: left;
  margin-top: 120px;
}

.app-text p{
  font-size: 25px;
  width:800px;
  margin :20px 0 20px 30px;
  line-height: 35px;
}
.app-text1 h3{
  font-size: 35px;
  width:640px;
  position:relative;
  margin-left: 600px;
  margin-top: -300px;
  text-align: right;
}

.app-text1 p{
  font-size: 25px;
  width:650px;
  margin :20px 0 20px 30px;
  line-height: 35px;
  margin-left: 800px;
}

body
{
  background-image: url("car_pool3.jpg");
  background-repeat: no-repeat;
  background-size:auto; 
  background-position: right bottom;
  height:650px; 
}

</style>
 	</head>
	<body>

		<header>


			<div class="tab">
				
				
					<a href="newLogin.php" style="text-decoration: none">
						<button class="tablinks" >Login </button>
					</a>
				
				
					<a href="dlogin.php" style="text-decoration: none">
						<button class="tablinks" >Driver Login</button>
					</a>
				
				
					<a href="signup.php" style="text-decoration: none">
						<button class="tablinks" >Sign-up</button>
					</a>
				
				
					<a href="dsignUp.php" style="text-decoration: none">
						<button class="tablinks"  >Driver Sign-Up</button>
					</a>

					<a href="" style="text-decoration: none">
						<button class="tablinks"  id="home" >Home</button>
					</a>
				
			</div>
			<div >
				<div class="banner">
					<div class="app-text">
						<h2 id="textcnt">CAR AND AUTO POOL FOR<br>BMS STUDENTS</h2>
						<p>Networking on the go <br>Create new friends with your fellow carpool <br>and save money on every ride!!</p>
					</div>
				</div>
			</div>



			
						
					<!--</div>

			</nav>-->
</body>
</html>