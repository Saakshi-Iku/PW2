<?php
	function createDB()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="bookDriverdb";

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
			$createtable=" CREATE TABLE IF NOT EXISTS books(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				driver_id int(11) NOT NULL,
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
