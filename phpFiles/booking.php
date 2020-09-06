<?php

require_once("./getCon.php");
$con=getCon();

require_once("./bookdb.php");
$con1=createbookingDB();



if(!empty($_POST))
{
	//selecting all users
	$sqlread="SELECT * FROM user_details";
	$result=mysqli_query($GLOBALS['con'],$sqlread);
	if($result)
	{

	while($row=mysqli_fetch_assoc($result))
	{
		
	//matching to whom is clicked
		if($row['ID']== $_POST['id'])
		{
			$user=$row['ID'];
			

			//checking if driver is available
			$driver=checkDriver($row['PICKUP']);

			//if available
			if($driver)
			{
				


				//update drivers present location to NULL
				$sqlupdate="UPDATE driver_details SET LOCATION=NULL WHERE id='$driver'";
				if(mysqli_query($GLOBALS['con'],$sqlupdate))
				{
					//textNode("success","query updated!!");

				}
				else{
					textNode("error","error in query-updation ".mysqli_error($GLOBALS['con']));
				}


				//insert person who has logged in booking
				if (isset($_SESSION['userid'])) 
	        	{
					$session_userid =$_SESSION['id'];
					$sqlinsert="INSERT INTO booking(driver_id,user_id) VALUES ('$driver','$session_userid')";
			        if(mysqli_query($GLOBALS['con1'],$sqlinsert))
			        {
			        	echo "logged in person inserted";
			        }
					else{
						textNode("error","error in driver booking".mysqli_error($GLOBALS['con1']));
					}
				}
				else{
					//echo"Not logged in";
				}
          

          		//insert person selected in booking
				$sqlinsert="INSERT INTO booking(driver_id,user_id) VALUES 
				('$driver','$user')";
				if(mysqli_query($GLOBALS['con1'],$sqlinsert))
				{

					//booking confirmed

					?>
					
					
					<!DOCTYPE html>
				<html>
				<head>
					<title>confirmation</title>
					<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
					<style>
						body{
							background-color: rgba(51,51,51,0.7);
						}
						#j1{
							width:400px;
							height:150px;
							background-color:#e6ce1D;
							margin-bottom:0px;
							border-bottom: none;
							border-radius: 0px;
							text-align: center;
							

						}
						.fa { 
								transform: scale(6,6);
								margin-top: 50px;

						    }
						#j2{
							width:400px;
							text-align: center;
							background-color:white;
							border-radius: 0px;
						}
						.container{
							margin-left: 35%;
							margin-top:8%;
							border-radius: 10px;
						}
						.btn{
							background-color: #e6ce1D;
							width:150px;
							border-radius: 30px;
							margin-right: 30px;
						}
						#ic{
							color:white;
							width: 35px;
							height: 35px;
						}
					</style>
				</head>
				<body>

				<div class="container">
					<div class="jumbotron" id="j1">
						<i class="fa fa-check-circle" id="ic" aria-hidden="true" width="50" height="50"></i>
					</div>
					<div class="jumbotron" id="j2">
						<h2>Awesome</h2>
						<p>Your booking has been confirmed</p>
						<p>Your Auto is waiting outside  
							<?php echo$row['PICKUP'] ?></p>
						<p>Contact your travel mates</p>
						<div class="d-flex" style="margin-left: 0px;margin-top: 20px;">
							<form action="profile.php" method="POST">
								<input type="hidden" id="userid" name="userid" 
							value="<?php echo$_POST['id']?>">
							<button class="btn btn-lg">passenger</button>
							</form>

							<form action="dprofile.php" method="POST">
								<input type="hidden" id="userid" name="userid" 
							value="<?php echo$driver?>">
							
							<button class="btn btn-lg">Driver</button>	
							</form>
							
						</div>
						
					</div>
				</div>
					

				<script type="text/javascript">"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"</script>
				<script type="text/javascript">"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"</script>
				</body>
				</html>



				<?php }
				else{
					textNode("error","error in driver booking".mysqli_error($GLOBALS['con1']));
				}
			}
			}
			
		

	}


	}
	else{echo"no result";}


}



//checks if driver is available
function checkDriver($location)
 {
 	
 	$sqlreadcheckDriver="SELECT * FROM driver_details WHERE LOCATION='$location'";
 	$result=mysqli_query($GLOBALS['con'],$sqlreadcheckDriver);
 	if($result)
 	{

 		while($row=mysqli_fetch_assoc($result))
 		{
 			$driver_id=$row['ID'];
 			//returns driver id of available driver
			return $driver_id;
 			break;
 		}
 		textNode("error","DRIVER NOT AVAILABLE".mysqli_error($GLOBALS['con']));	
 		exit();
 	}
 	else{
 		
 	}
 }    



 function textNode($classname,$mess){
		$text="<h6  style=\"padding:1em;
	background-color: tomato;\"class='$classname'>$mess</h6>";
		echo "$text";
	}
	 
?>



