<?php
	function createDB()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="Lab_project";

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
			$createtable=" CREATE TABLE IF NOT EXISTS User(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				user_name varchar(25) NOT NULL,
				pick_up_location varchar(20),
				drop_location varchar(20)
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
