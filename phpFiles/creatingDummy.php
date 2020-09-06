<?php
require_once("./Userdb.php");
require_once("./Driverdb.php");

//creating dummy user data
$con=createDB();

$user_name="user1";
$pick_up_location="BMS";
$drop_location="Metro";

if($user_name&&$pick_up_location&&$drop_location)
{
	$sqlcreate="INSERT INTO User(user_name,drop_location,pick_up_location) VALUES 
	('$user_name','$drop_location','$pick_up_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}

$user_name="user2";
$pick_up_location="BMS";
$drop_location="Metro";

if($user_name&&$pick_up_location&&$drop_location)
{
	$sqlcreate="INSERT INTO User(user_name,drop_location,pick_up_location) VALUES 
	('$user_name','$drop_location','$pick_up_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}


$user_name="user3";
$pick_up_location="Metro";
$drop_location="BMS";

if($user_name&&$pick_up_location&&$drop_location)
{
	$sqlcreate="INSERT INTO User(user_name,drop_location,pick_up_location) VALUES 
	('$user_name','$drop_location','$pick_up_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}

$user_name="user4";
$pick_up_location="Metro";
$drop_location="BMS";

if($user_name&&$pick_up_location&&$drop_location)
{
	$sqlcreate="INSERT INTO User(user_name,drop_location,pick_up_location) VALUES 
	('$user_name','$drop_location','$pick_up_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}
	

//creating dummy driver data

$con=createDriverDB();

$driver_name="driver1";
$present_location="BMS";

if($driver_name&&$present_location)
{
	$sqlcreate="INSERT INTO Driver(driver_name,present_location) VALUES 
	('$driver_name','$present_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}

$driver_name="driver2";
$present_location="BMS";


if($driver_name&&$present_location)
{
	$sqlcreate="INSERT INTO Driver(driver_name,present_location) VALUES 
	('$driver_name','$present_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}


$driver_name="driver3";
$present_location="Metro";

if($driver_name&&$present_location)
{
	$sqlcreate="INSERT INTO Driver(driver_name,present_location) VALUES 
	('$driver_name','$present_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}

$driver_name="driver4";
$present_location="Metro";

if($driver_name&&$present_location)
{
	$sqlcreate="INSERT INTO Driver(driver_name,present_location) VALUES 
	('$driver_name','$present_location')";
	if(mysqli_query($GLOBALS['con'],$sqlcreate))
	{
		textNode("success","query created!!");

	}
	else{
		textNode("error","error in query-creation".mysqli_error($GLOBALS['con']));
	}
}


function textNode($classname,$mess){
		$text="<h6 class='$classname'>$mess</h6>";
		echo "$text";
	}
	
?>


