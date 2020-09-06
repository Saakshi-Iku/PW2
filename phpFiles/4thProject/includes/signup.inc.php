<?php
if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$userid = $_POST['uid'];
	$fullname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['mail'];
	$mobile = $_POST['mobile'];
	$college = $_POST['clg'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if(empty($userid) || empty($fullname) || empty($email) || empty($mobile) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../signup.php?error=emptyfields&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userid)){
		header("Location: ../signup.php?error=invalidmailuid&firstname=".$fullname."&lastname=".$lastname."mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $fullname)){
		header("Location: ../signup.php?error=invalidmailfirstname&uid=".$username."mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid) && !preg_match("/^[a-zA-Z]*$/", $fullname)){
		header("Location: ../signup.php?error=invaliduidfirstname&mail=".$email."mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if(strlen($mobile)!=10){
		header("Location: ../signup.php?error=invalidmobile&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&clg=".$college);
		exit();	
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&lastname=".$lastname."&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid)) {
		header("Location: ../signup.php?error=invaliduid&firstname=".$fullname."&lastname=".$lastname."&lastname=".$lastname."&mail=".$mail."&mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
		header("Location: ../signup.php?error=invalidfirstname&lastname=".$lastname."&uid=".$userid."&mail=".$mail."&mobile=".$mobile."&clg=".$college);
		exit();
	}
	else if ($password !== $passwordRepeat){
		header("Location: ../signup.php?error=passwordcheck&uid=".$userid."&firstname=".$fullname."&lastname=".$lastname."&mail=".$email."&mobile=".$mobile."&clg=".$college);
		exit();
	}
	/*else {
		$sql = "SELECT user_id FROM user_details WHERE user_id=?";
		$stmt = mysqli_stmt_init($conn);
		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $userid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: signup.php?error=usertaken&mail=".$mail."&mobile".$mobile);
				exit();	
			}
			else 
			{
				$sql = "INSERT INTO user_details (user_id, full_name, email, mobile_no, college, password) VALUES ('$userid', '$fullname', '$email', '$mobile', '$college', '$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: signup.php?signup=success");
				exit();

			}
		}


	}*/
	else {
		$sql = "SELECT USER_ID FROM USER_DETAILS WHERE USER_ID=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $userid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&firstname=".$fullname."&lastname=".$lastname."&mail=".$mail."&clg=".$college."&mobile".$mobile);
				exit();	
			}
			else {
				$sql = "INSERT INTO USER_DETAILS (USER_ID, FIRSTNAME, LASTNAME, EMAIL, MOBILE_NO, COLLEGE, PASSWORD) VALUES (?, ?, ?, ?, ?, ?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sssssss", $userid, $fullname, $lastname, $email, $mobile, $college, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=success");
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