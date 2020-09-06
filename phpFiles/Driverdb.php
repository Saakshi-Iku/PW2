<?php
	function createDriverDB()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="Lab_Project";

		//create connection
		$con=mysqli_connect($servername,$username,$password);

		//check connection

		if(!$con)
		{
			die("connection Failed ".mysqli_connect_error());
		}

		//create database

		$sql="CREATE DATABASE IF NOT EXISTS $dbname";
		if(mysqli_query($con,$sql))
		{
			$con=mysqli_connect($servername,$username,$password,$dbname);
			$createtable=" CREATE TABLE IF NOT EXISTS Driver(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				driver_name varchar(25) NOT NULL,
				present_location varchar(25)
			)";

			if(mysqli_query($con,$createtable))
			{
				return $con;
			}
			else{
				echo "cannot crete table".mysqli_error($con);
			}
		}
		else{
			echo"error while creating ".mysqli_error($con);
		}
	}


?>