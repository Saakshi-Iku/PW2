<?php
	require_once("./getCon.php");
$con=getCon();

	$sqlread="SELECT * FROM user_details";
	$result=mysqli_query($GLOBALS['con'],$sqlread);

	if($result)
	{

	while($row=mysqli_fetch_assoc($result))
	{
		if ($row['ID']==$_POST['userid']) {
			
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background-color: #e6ce1D;
		}

		.jumbotron{
			background-color: white;
			width:370px;
			height:500px;
			border-radius: 30px;
			margin-left:35%;
			margin-top:5%;
		}
		#outer-circle {
		   background: #ffc107;
		   border-radius: 50%;
		   height: 120px;
		   width: 120px;
		   position: relative;
		   margin-left: 33%;
		   /* 
		    Child elements with absolute positioning will be 
		    positioned relative to this div 
		   */
		 }
		 #inner-circle {
		   position: absolute;
		   background: #ffa000;
		   border-radius: 50%;
		   height: 100px;
		   width: 100px;
		   /*
		    Put top edge and left edge in the center
		   */
		   top: 50%;
		   left: 50%;
		   margin: -50px 0px 0px -50px;
		   /* 
		    Offset the position correctly with
		    minus half of the width and minus half of the height 
		   */
		 }

		 #im{
		 	position: absolute;
		   border-radius: 50%;
		   height: 80px;
		   width: 80px;
		   /*
		    Put top edge and left edge in the center
		   */
		   top: 50%;
		   left: 50%;
		   margin: -40px 0px 0px -40px;
		   
		 }
		 .name{
		 	margin-top: 10px;

		 }
		 .coll{
		 	margin-top: 0px;
		 	color:#878787;
		 }
		 .val1{
		 	margin-top: 35px;
		 }
		 .val2{
		 	margin-top: 15px;
		 }
		 .btn{
		 	background-color: #ffc400;
		 	border-radius: 30px;
		 	width:150px;
		 	margin-left: 75px;
		 	margin-top: 35px;
		 }
	</style>
</head>
<body>

	<div class="jumbotron">
		<div id="outer-circle">
		  <div id="inner-circle">
		  	<img id="im" src="./css/f1.jpg" />
		  </div>
		</div>

		<div class="d-flex flex-column justify-content-center">
			<h4 class="name" style="text-align:center"><?php echo $row['FIRSTNAME']?>
				<?php echo $row['LASTNAME']?>
			</h4>
			<h6 class="coll" style="text-align:center"><?php echo $row['COLLEGE']?></h6>
			<div class="val1">
				<h5>
					<span style="margin-right: 35px"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<?php echo $row['EMAIL']?>
				</h5>
			</div>
			<div class="val2">
				<h5>
					<span style="margin-right: 35px"><i class="fa fa-phone" aria-hidden="true"></i></span>
					+91-<?php echo $row['MOBILE_NO']?>
				</h5>
			</div>
			<button class="btn btn-lg ">OK</button>
			<?php }}
	}?>

		</div>
	</div>

</body>
</html>