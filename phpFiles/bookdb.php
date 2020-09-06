<?php
	function createbookingDB()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="login";

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
			$createtable=" CREATE TABLE IF NOT EXISTS booking(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				driver_id int(11) NOT NULL,
				user_id  int(11) NOT NULL,
				FOREIGN KEY (driver_id) REFERENCES driver_details(ID),
				FOREIGN KEY (user_id) REFERENCES user_details(ID)
			)";

			if(mysqli_query($con,$createtable))
			{
				return $con;
			}
			else{
				echo "cannot crete table bookDriver".mysqli_error($con);
			}
		}
		else{
			echo"error while creating bookDriver".mysqli_error($con);
		}
	}
