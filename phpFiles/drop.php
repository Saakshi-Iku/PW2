<?php

require_once("./Userdb.php");
$con=createDB();
require_once("./Driverdb.php");
$con3=createDriverDB();
require_once("./bookDriverdb.php");
$con1=createbookDriverDB();
require_once("./bookPeople.php");
$con2=createbookPeopleDB();



$sql="drop table bookDriver;";
if(mysqli_query($GLOBALS['con1'],$sql))
	{
		textNode("success","query updated!!");

	}
	else{
		textNode("error","error in query-updation ".mysqli_error($GLOBALS['con1']));
	}

	function textNode($classname,$mess){
		$text="<h6 class='$classname'>$mess</h6>";
		echo "$text";
	}