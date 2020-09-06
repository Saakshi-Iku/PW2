<?php

if (isset($_POST['login-submit'])) {

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];
	$location = $_POST['location'];
	echo "mail :$mailuid";
	echo "location: $location";

	if (empty($mailuid) || empty($password || empty($location))) {
		header("Location: ../dindex.php?error=emptyfields");
		exit();
	}
	else {
		// $sql = "UPDATE DRIVER_DETAILS
		// 		SET LOCATION=$location
		// 		WHERE DRIVER_ID=".$mailuid ."OR EMAIL=$mailuid;";
				if ($conn->query(
					 "UPDATE DRIVER_DETAILS 
                      SET LOCATION =  '$location'
                      WHERE DRIVER_ID= '$mailuid' OR EMAIL='$mailuid'"
				) === TRUE) {
				  echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . $conn->error;
				}
				
		$sql = "SELECT * FROM DRIVER_DETAILS WHERE DRIVER_ID=? OR EMAIL=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../dindex.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdcheck = password_verify($password, $row['PASSWORD']);
				if ($pwdcheck == false) {
					header("Location: ../dindex.php?error=wrongpwd");
					exit();
				}
				else if ($pwdcheck == true) {
					session_start();
					$_SESSION['id'] = $row['ID'];
					$_SESSION['userid'] = $row['DRIVER_ID'];
					$_SESSION['full-name'] = $row['FULL_NAME'];
					$_SESSION['mobile'] = $row['MOBILE'];
					$_SESSION['license'] = $row['LICENSE'];

					header("Location: ../dindex.php");
					//exit();
				}
				else {
					header("Location: ../dindex.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../dindex.php?error=nouser");
				exit();
			}
		}
	}
}
	else{
		header("Location: ../index.php");
		exit();

}
