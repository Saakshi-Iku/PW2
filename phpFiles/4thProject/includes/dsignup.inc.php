<?php
if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$userid = $_POST['uid'];
	$fullname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['mail'];
	$mobile = $_POST['mobile'];
	$password = $_POST['pwd'];
	$license = $_POST['license'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if(empty($userid) || empty($fullname) || empty($email) || empty($mobile) || empty($license) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../dsignup.php?error=emptyfields&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&mobile=".$mobile."&license".$license);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userid)){
		header("Location: ../dsignup.php?error=invalidmailuid&firstname=".$fullname."&lastname=".$lastname."mobile=".$mobile."&license".$license);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $fullname)){
		header("Location: ../dsignup.php?error=invalidmailfirstname&lastname=".$lastname."&uid=".$username."mobile=".$mobile."&license".$license);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid) && !preg_match("/^[a-zA-Z]*$/", $fullname)){
		header("Location: ../dsignup.php?error=invaliduidfirstname&lastname=".$lastname."&mail=".$email."mobile=".$mobile."&license".$license);
		exit();
	}
	else if(strlen($mobile)!=10){
		header("Location: ../dsignup.php?error=invalidmobile&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&license".$license);
		exit();	
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../dsignup.php?error=invalidmail&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mobile=".$mobile."&license".$license);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid)) {
		header("Location: ../dsignup.php?error=invaliduid&firstname=".$fullname."&lastname=".$lastname."&mail=".$mail."&mobile=".$mobile."&license".$license);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
		header("Location: ../dsignup.php?error=invalidfirstname&lastname=".$lastname."&uid=".$userid."&mail=".$mail."&mobile=".$mobile."&license".$license);
		exit();
	}
	else if ($password !== $passwordRepeat){
		header("Location: ../dsignup.php?error=passwordcheck&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&mobile=".$mobile."&license".$license);
		exit();
	}
	else {
		$sql = "SELECT DRIVER_ID FROM DRIVER_DETAILS WHERE DRIVER_ID=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../dsignup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $userid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ..dsignup.php?error=usertaken&mail=".$mail."&mobile".$mobile."&firstname=".$fullname."&lastname=".$lastname."&license".$license);
				exit();	
			}
			else {
				$sql = "INSERT INTO DRIVER_DETAILS (DRIVER_ID, FIRSTNAME, LASTNAME, EMAIL, MOBILE_NO, LICENSE_NO, PASSWORD) VALUES (?, ?, ?, ?, ?, ?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../dsignup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sssssss", $userid, $fullname, $lastname, $email, $mobile, $license, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../dsignup.php?signup=success");
					exit();
					
				}

			}
		}


	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else {
	header("Location: ../signup.php");
	exit();
}